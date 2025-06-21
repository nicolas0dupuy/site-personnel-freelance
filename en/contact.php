<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>Contact</h1>
    <p class="page-intro">
        Have a question, a project, or just want to chat? Feel free to send me a message using the form below. I will get back to you as soon as possible.
    </p>

    <?php
    // Logic to pre-fill the subject field if coming from the Services page
    $sujet_initial = '';
    if (isset($_GET['service'])) {
        // We clean the value for security and format it
        $service_propre = htmlspecialchars(str_replace('-', ' ', $_GET['service']));
        $sujet_initial = "Inquiry about the service: " . ucwords($service_propre);
    }
    ?>

    <form action="<?php echo SITE_URL; ?>/traitement_formulaire.php" method="POST" class="contact-form">
        <input type="hidden" name="lang" value="<?php echo $current_lang; ?>">
        
        <div class="form-group">
            <label for="nom">Your Name:</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="sujet">Subject:</label>
            <input type="text" id="sujet" name="sujet" value="<?php echo $sujet_initial; ?>" required>
        </div>

        <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="8" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit">Send Message</button>
        </div>

    </form>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>