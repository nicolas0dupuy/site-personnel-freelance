<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>Contact</h1>
    <p class="page-intro">
        Une question, un projet ou simplement envie de discuter ? N'hésitez pas à m'envoyer un message via le formulaire ci-dessous. Je vous répondrai dans les meilleurs délais.
    </p>

    <?php
    // Logique pour pré-remplir le champ "sujet" si on vient de la page Services
    $sujet_initial = '';
    if (isset($_GET['service'])) {
        // On nettoie la valeur pour la sécurité et on la met en forme
        $service_propre = htmlspecialchars(str_replace('-', ' ', $_GET['service']));
        $sujet_initial = "Demande concernant le service : " . ucwords($service_propre);
    }
    ?>

    <form action="traitement_formulaire.php" method="POST" class="contact-form">
        
        <div class="form-group">
            <label for="nom">Votre Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="email">Votre Email :</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet" value="<?php echo $sujet_initial; ?>" required>
        </div>

        <div class="form-group">
            <label for="message">Votre Message :</label>
            <textarea id="message" name="message" rows="8" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit">Envoyer le message</button>
        </div>

    </form>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>