<?php
// On vérifie que le formulaire a bien été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- 1. SÉCURITÉ & NETTOYAGE DES DONNÉES ---
    // On récupère les données du formulaire et on les nettoie pour éviter les failles de sécurité.
    
    // htmlspecialchars() convertit les caractères spéciaux en entités HTML (ex: < devient &lt;)
    // strip_tags() supprime les balises HTML et PHP
    $nom = strip_tags(htmlspecialchars($_POST['nom']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $sujet = strip_tags(htmlspecialchars($_POST['sujet']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    // --- 2. VALIDATION DES DONNÉES ---
    // On vérifie que les champs ne sont pas vides et que l'email est valide.
    if (!empty($nom) && !empty($email) && !empty($sujet) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // --- 3. PRÉPARATION DE L'EMAIL ---
        $destinataire = "nicolas0dupuy@gmail.com"; // <-- REMPLACEZ PAR VOTRE VRAIE ADRESSE EMAIL

        $sujet_email = "Nouveau message de votre site web : " . $sujet;

        $corps_email = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site.\n\n";
        $corps_email .= "Nom: " . $nom . "\n";
        $corps_email .= "Email: " . $email . "\n\n";
        $corps_email .= "Message:\n" . $message . "\n";

        // En-têtes de l'email
        $headers = "From: " . $nom . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // --- 4. ENVOI DE L'EMAIL ---
        // La fonction mail() de PHP tente d'envoyer l'email.
        if (mail($destinataire, $sujet_email, $corps_email, $headers)) {
            // Si l'envoi réussit, on redirige l'utilisateur vers une page de remerciement.
            header("Location: merci.php?lang=" . $lang_form);
            exit;
        } else {
            // Si l'envoi échoue, on redirige vers une page d'erreur.
            header("Location: erreur.php?lang=" . $lang_form);
            exit;
        }

    } else {
        // Si des données sont manquantes ou invalides, on redirige vers la page d'erreur.
        header("Location: erreur.php?lang=" . $lang_form);
        exit;
    }

} else {
    // Si quelqu'un essaie d'accéder à ce fichier directement sans passer par le formulaire, on le redirige.
    header("Location: contact.php?lang=" . $lang_form);
    exit;
}
?>