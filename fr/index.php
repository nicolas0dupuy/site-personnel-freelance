<?php
// Lignes de débogage à ajouter TEMPORAIREMENT tout en haut
ini_set('display_errors', 1);
error_reporting(E_ALL);
// --- Fin des lignes de débogage ---
?>
<?php include __DIR__ . '/../includes/header.php'; // On inclut le header qui inclut lui-même la config ?>

<main>

    <section class="hero">
        <h1>Nicolas Dupuy - Data, Machine Learning & Modélisation Scientifique</h1>
        <p class="subtitle">Née d'années de recherche académique à la croisée des domaines, ma polyvalence me permet de résoudre vos défis data & ML par les moyens les plus variés. Je renforce vos équipes en apportant ma capacité d'analyse et une rigueur scientifique de niveau doctoral, de la modélisation théorique au développement de solutions pratiques, en passant par divers services connexes.</p>
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