<?php
// On inclut la config pour avoir accès à nos constantes et variables
include_once 'includes/config.php';

// On détermine la langue depuis le paramètre d'URL, avec 'fr' par défaut
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'fr';

// On définit les textes et les liens en fonction de la langue
if ($lang === 'fr') {
    $page_title = "Message Envoyé !";
    $h1_text = "Merci !";
    $p_text = "Votre message a bien été envoyé. Je vous répondrai dans les meilleurs délais.";
    $button_text = "Retour à l'accueil";
    $home_link = SITE_URL . '/fr/';
} else {
    $page_title = "Message Sent!";
    $h1_text = "Thank you!";
    $p_text = "Your message has been sent successfully. I will get back to you as soon as possible.";
    $button_text = "Back to Homepage";
    $home_link = SITE_URL . '/en/';
}

// Le header doit être inclus APRES avoir défini les variables dont il a besoin
include 'includes/header.php'; 
?>

<main>
    <div style="text-align: center; padding: 50px 20px;">
        <h1><?php echo $h1_text; ?></h1>
        <p><?php echo $p_text; ?></p>
        <a href="<?php echo $home_link; ?>" class="cta-button"><?php echo $button_text; ?></a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>