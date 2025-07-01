<?php
// Démarrer la session pour récupérer la langue
session_start();
$lang = $_SESSION['form_lang'] ?? 'fr'; // Utilise la langue du formulaire, ou 'fr' par défaut

// --- 1. Validation et Sécurisation des Données ---

$errors = [];
$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$sujet = trim($_POST['sujet'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($nom)) {
    $errors[] = 'Le nom est obligatoire.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Une adresse email valide est obligatoire.';
}
if (empty($sujet)) {
    $errors[] = 'Le sujet est obligatoire.';
}
if (empty($message)) {
    $errors[] = 'Le message ne peut pas être vide.';
}

// Si on a des erreurs de validation, on redirige vers la page d'erreur
if (!empty($errors)) {
    // Pour un vrai site, on mettrait les erreurs dans la session pour les afficher
    header("Location: erreur.php");
    exit();
}

// Sécurisation simple pour l'affichage dans l'e-mail
$nom = htmlspecialchars($nom);
$email = htmlspecialchars($email);
$sujet = htmlspecialchars($sujet);
$message = htmlspecialchars($message);


// --- 2. Récupérer la clé API depuis Secret Manager ---

// Cette fonction nécessite que le rôle "Accesseur de secrets..." soit bien positionné
function get_secret($secretName) {
    // On construit le nom complet de la ressource du secret
    $projectId = getenv('GCP_PROJECT');
    if (!$projectId) return null; // Ne fonctionne que sur GCP

    $resourceName = "projects/{$projectId}/secrets/{$secretName}/versions/latest";
    
    // On prépare une requête authentifiée vers l'API de Secret Manager
    $url = "https://secretmanager.googleapis.com/v1/{$resourceName}:access";
    
    // On utilise le token d'identité du service Cloud Run
    $tokenUrl = "http://metadata.google.internal/computeMetadata/v1/instance/service-accounts/default/identity?audience=" . rawurlencode($url);
    
    $ch_token = curl_init($tokenUrl);
    curl_setopt($ch_token, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch_token, CURLOPT_HTTPHEADER, ['Metadata-Flavor: Google']);
    $token = curl_exec($ch_token);
    curl_close($ch_token);

    if (!$token) return null;

    // On fait l'appel final pour récupérer la valeur du secret
    $ch_secret = curl_init($url);
    curl_setopt($ch_secret, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch_secret, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $token]);
    $response = curl_exec($ch_secret);
    curl_close($ch_secret);

    $decoded_response = json_decode($response, true);

    // Le secret est encodé en base64, il faut le décoder
    return isset($decoded_response['payload']['data']) ? base64_decode($decoded_response['payload']['data']) : null;
}

$sendgrid_api_key = get_secret('SENDGRID_API_KEY');

if (!$sendgrid_api_key) {
    // Si on ne récupère pas la clé, on ne peut pas envoyer d'email
    header("Location: erreur.php");
    exit();
}


// --- 3. Envoyer l'e-mail via l'API SendGrid ---

$email_data = [
    'personalizations' => [
        [
            'to' => [
                // METTEZ VOTRE ADRESSE E-MAIL ICI
                ['email' => 'nicolas.dupuy@versatile-ai.eu', 'name' => 'Nicolas Dupuy']
            ]
        ]
    ],
    'from' => [
        // Utilisez une adresse e-mail que vous avez validée sur SendGrid
        'email' => 'nicolas.dupuy@versatile-ai.eu', 
        'name' => 'Site Web de Nicolas'
    ],
    'reply_to' => [
        'email' => $email,
        'name' => $nom
    ],
    'subject' => 'Nouveau message du formulaire de contact: ' . $sujet,
    'content' => [
        [
            'type' => 'text/plain',
            'value' => "Vous avez reçu un nouveau message de votre site web.\n\n" .
                       "De: {$nom} ({$email})\n" .
                       "Sujet: {$sujet}\n\n" .
                       "Message:\n" .
                       "--------------------------------------\n" .
                       $message
        ]
    ]
];

// On prépare et on envoie la requête à l'API SendGrid
$ch = curl_init('https://api.sendgrid.com/v3/mail/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($email_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $sendgrid_api_key,
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


// --- 4. Redirection finale ---

// SendGrid renvoie un code 202 (Accepted) si tout s'est bien passé
if ($httpcode == 202) {
    header("Location: merci.php");
} else {
    // Pour déboguer, vous pourriez logger la réponse: error_log($response);
    header("Location: erreur.php");
}
exit();
?>