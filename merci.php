<?php
// On inclut la config qui fait TOUT le travail (démarrage de session, détection de langue...).
include_once __DIR__ . '/includes/config.php';

// La variable $current_lang est maintenant DÉJÀ DÉFINIE et correcte grâce à config.php.
// On définit juste les textes spécifiques à cette page en fonction de cette variable.
if ($current_lang === 'fr') {
    $page_title = "Message Envoyé !";
    $h1_text = "Merci !";
    $p_text = "Votre message a bien été envoyé. Je vous répondrai dans les meilleurs délais.";
    $button_text = "Retour à l'accueil";
} else {
    $page_title = "Message Sent!";
    $h1_text = "Thank you!";
    $p_text = "Your message has been sent successfully. I will get back to you as soon as possible.";
    $button_text = "Back to Homepage";
}

// On passe les variables nécessaires au header, qui est inclus juste après.
$lang = $current_lang; 
include_once __DIR__ . '/includes/header.php'; 
?>

<main>
    <div style="text-align: center; padding: 50px 20px;">
        <h1><?php echo htmlspecialchars($h1_text); ?></h1>
        <p><?php echo htmlspecialchars($p_text); ?></p>
        <a href="<?php echo SITE_URL . '/' . $current_lang . '/'; ?>" class="cta-button"><?php echo htmlspecialchars($button_text); ?></a>
    </div>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>