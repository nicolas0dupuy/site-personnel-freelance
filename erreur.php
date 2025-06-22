<?php
// On inclut la config qui fait TOUT le travail de détection de langue.
include_once __DIR__ . '/includes/config.php';

if ($current_lang === 'fr') {
    $page_title = "Erreur d'envoi";
    $h1_text = "Oups ! Une erreur est survenue.";
    $p_text = "Votre message n'a pas pu être envoyé. Veuillez réessayer.";
    $button_text = "Retour au formulaire";
} else {
    $page_title = "Sending Error";
    $h1_text = "Oops! An error occurred.";
    $p_text = "Your message could not be sent. Please try again.";
    $button_text = "Back to the form";
}

$lang = $current_lang; // Pour la balise <html lang="">
include_once __DIR__ . '/includes/header.php';
?>
<main>
    <div style="text-align: center; padding: 50px 20px;">
        <h1><?php echo $h1_text; ?></h1>
        <p><?php echo $p_text; ?></p>
        <a href="<?php echo SITE_URL . '/' . $current_lang . '/contact.php'; ?>" class="cta-button"><?php echo $button_text; ?></a>
    </div>
</main>
<?php include_once __DIR__ . '/includes/footer.php'; ?>