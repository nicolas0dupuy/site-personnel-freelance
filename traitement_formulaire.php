<?php
// VERSION FINALE - Ultime tentative avec file_get_contents
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\SecretManager\V1\Client\SecretManagerServiceClient;
use Google\Cloud\SecretManager\V1\AccessSecretVersionRequest;

session_start();

// --- 1. Validation ---
$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$sujet = trim($_POST['sujet'] ?? '');
$message = trim($_POST['message'] ?? '');
$_SESSION['form_lang'] = trim($_POST['lang'] ?? 'fr');

if (empty($nom) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($sujet) || empty($message)) {
    header("Location: erreur.php");
    exit();
}

// --- 2. Récupération de la clé API ---
$sendgrid_api_key = null;
try {
    $client = new SecretManagerServiceClient();
    $projectId = 'site-versatile-ai';
    $secretName = 'sendgrid_site_freelance';
    $name = $client->secretVersionName($projectId, $secretName, 'latest');
    
    $request = new AccessSecretVersionRequest();
    $request->setName($name);

    $response = $client->accessSecretVersion($request);
    $sendgrid_api_key = $response->getPayload()->getData();
} catch (Exception $e) {
    error_log("Google Cloud Secret Manager Error: " . $e->getMessage());
    header("Location: erreur.php");
    exit();
} finally {
    if (isset($client)) {
        $client->close();
    }
}

if (empty($sendgrid_api_key)) {
    error_log("FATAL ERROR: SendGrid API Key was null or empty.");
    header("Location: erreur.php");
    exit();
}

// --- 3. Envoi de l'e-mail via file_get_contents ---
$url = 'https://api.sendgrid.com/v3/mail/send';
$email_data = [
    'personalizations' => [
        [ 'to' => [ ['email' => 'nicolas.dupuy@versatile-ai.eu', 'name' => 'Nicolas Dupuy'] ] ]
    ],
    'from' => ['email' => 'nicolas.dupuy@versatile-ai.eu', 'name' => 'Formulaire Site Web'],
    'reply_to' => ['email' => htmlspecialchars($email), 'name' => htmlspecialchars($nom)],
    'subject' => 'Nouveau message du formulaire de contact: ' . htmlspecialchars($sujet),
    'content' => [
        [
            'type' => 'text/plain',
            'value' => "De: " . htmlspecialchars($nom) . " (" . htmlspecialchars($email) . ")\n" .
                       "Sujet: " . htmlspecialchars($sujet) . "\n\n" .
                       "Message:\n" .
                       "--------------------------------------\n" .
                       htmlspecialchars($message)
        ]
    ]
];

$options = [
    'http' => [
        'header' => "Content-Type: application/json\r\n" .
                    "Authorization: Bearer " . $sendgrid_api_key,
        'method' => 'POST',
        'content' => json_encode($email_data),
        'ignore_errors' => true // Important pour récupérer le corps de la réponse même en cas d'erreur
    ],
];
$context = stream_context_create($options);
$response_body = file_get_contents($url, false, $context);

// On récupère le code de statut depuis les en-têtes de réponse
$httpcode = 0;
if (isset($http_response_header[0])) {
    preg_match('{HTTP\/\S*\s(\d{3})}', $http_response_header[0], $match);
    if (isset($match[1])) {
        $httpcode = (int)$match[1];
    }
}

// --- 4. Redirection finale ---
if ($httpcode == 202) {
    header("Location: merci.php");
} else {
    error_log("SendGrid API Error (via file_get_contents): HTTP " . $httpcode . " - " . $response_body);
    header("Location: erreur.php");
}
exit();
?>
