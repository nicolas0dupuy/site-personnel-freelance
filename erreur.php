<?php
// On inclut la config pour avoir accès à nos constantes et variables
include_once 'includes/config.php';

// On détermine la langue depuis le paramètre d'URL, avec 'fr' par défaut
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'fr';

// On définit les textes et les liens en fonction de la langue
if ($lang === 'fr') {
    $page_title = "Erreur d'envoi";
    $h1_text = "Oups ! Une erreur est survenue.";
    $p_text = "Votre message n'a pas pu être envoyé. Veuillez réessayer ou me contacter par un autre moyen.";
    $button_text = "Retour au formulaire";
    $contact_link = SITE_URL . '/fr/contact.php';
} else {
    $page_title = "Sending Error";
    $h1_text = "Oops! An error occurred.";
    $p_text = "Your message could not be sent. Please try again or contact me through other means.";
    $button_text = "Back to the form";
    $contact_link = SITE_URL . '/en/contact.php';
}

// Le header doit être inclus APRES avoir défini les variables
include 'includes/header.php'; 
?>

<main>
    <div style="text-align: center; padding: 50px 20px;">
        <h1><?php echo $h1_text; ?></h1>
        <p><?php echo $p_text; ?></p>
        <a href="<?php echo $contact_link; ?>" class="cta-button"><?php echo $button_text; ?></a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>