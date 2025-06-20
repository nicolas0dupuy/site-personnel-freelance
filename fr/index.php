<?php
// Lignes de débogage à ajouter TEMPORAIREMENT tout en haut
ini_set('display_errors', 1);
error_reporting(E_ALL);
// --- Fin des lignes de débogage ---
?>
<?php include __DIR__ . '/../includes/header.php'; // On inclut le header qui inclut lui-même la config ?>

<main>

    <section class="hero">
        <h1>Nicolas Dupuy</h1>
        <h2>La rigueur scientifique au service de vos données.</h2>
        <p class="subtitle">De la physique des particules à la data science, je transforme vos données complexes en informations claires et en décisions stratégiques.</p>
        <a href="<?php echo SITE_URL; ?>/fr/contact.php" class="cta-button">Discutons de votre projet</a>
    </section>

    <section class="carousel-container" aria-label="Mes points forts">
        <div class="carousel-track">

            <div class="strength-item carousel-slide">
                <h3>Expertise Technique</h3>
                <p>Maîtrise des outils de Data Science et Machine Learning (Python, SQL, Scikit-learn) pour des solutions robustes et performantes.</p>
            </div>

            <div class="strength-item carousel-slide">
                <h3>Vision Stratégique</h3>
                <p>Mon parcours atypique me donne une perspective unique pour comprendre vos enjeux métiers et traduire les données en valeur ajoutée.</p>
            </div>

            <div class="strength-item carousel-slide">
                <h3>Apprentissage Continu</h3>
                <p>Passionné et curieux, je me forme en permanence sur les dernières technologies (GCP, IA Médicale) pour vous offrir le meilleur.</p>
            </div>

        </div>
        <button class="carousel-button prev">&lt;</button>
        <button class="carousel-button next">&gt;</button>
    </section>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>