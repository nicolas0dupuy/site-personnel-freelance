<?php 
$page_title = "Erreur d'envoi";
$lang = 'fr'; // ou 'en' si vous faites la version anglaise
include 'includes/header.php'; 
?>
<main>
    <div style="text-align: center; padding: 50px;">
        <h1>Oups ! Une erreur est survenue.</h1>
        <p>Votre message n'a pas pu être envoyé. Veuillez réessayer ou me contacter directement par un autre moyen.</p>
        <a href="contact.php" class="cta-button">Retour au formulaire</a>
    </div>
</main>
<?php include 'includes/footer.php'; ?>