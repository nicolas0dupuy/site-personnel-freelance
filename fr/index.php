<?php
// Lignes de débogage à ajouter TEMPORAIREMENT tout en haut
ini_set('display_errors', 1);
error_reporting(E_ALL);
// --- Fin des lignes de débogage ---
?>
<?php include __DIR__ . '/../includes/header.php'; // On inclut le header qui inclut lui-même la config ?>

<main>

    <section class="hero">
        <h1>Versatile AI</h1>
        <p class="h1-subtitle">
            par Nicolas Dupuy | Data, Machine Learning & Modélisation Scientifique
        </p>
        <p class="subtitle">Née d'années de recherche académique à la croisée des domaines, ma polyvalence me permet de résoudre vos défis data & ML par les moyens les plus variés. Je renforce vos équipes en apportant ma capacité d'analyse et une rigueur scientifique de niveau doctoral, de la modélisation théorique au développement de solutions pratiques, en passant par divers services connexes.</p>
        <a href="<?php echo SITE_URL; ?>/fr/contact.php" class="cta-button">Discutons de votre projet</a>
    </section>

    <section class="carousel-container" aria-label="Mes points forts">
        <div class="carousel-track">

            <div class="strength-item carousel-slide">
                <h3>Services Sur-Mesure</h3>
                <p>Une gamme de services, du conseil généraliste en data & IA (data analyse, prototypage GCP) au renforcement R&D pour des équipes spécialisées (médical, finance...). Découvrez comment je peux vous aider à atteindre vos objectifs.</p>
                <div class="slide-buttons">
                    <a href="<?php echo SITE_URL; ?>/fr/services.php" class="cta-button">Découvrir mes services</a>
                    <a href="<?php echo SITE_URL; ?>/fr/contact.php" class="cta-button-secondary">Contact</a>
                </div>
            </div>

            <div class="strength-item carousel-slide">
                <h3>Un Parcours, Une Perspective</h3>
                <p>M'accueillir dans votre équipe, c'est collaborer avec un éternel étudiant. Je vous invite à découvrir les deux facettes qui constituent mon expertise : mon parcours académique et ma perspective de personne dans le spectre de l'autisme.</p>
                <div class="slide-buttons">
                    <a href="<?php echo SITE_URL; ?>/fr/parcours.php" class="cta-button">Découvrir mon Parcours</a>
                    <a href="<?php echo SITE_URL; ?>/fr/un-autre-regard.php" class="cta-button-secondary">Lire "Un Autre Regard"</a>
                </div>
            </div>

            <div class="strength-item carousel-slide">
                <h3>Apprentissage Continu</h3>
                <p>Pas une année depuis 25 ans ne s'est passée sans que je ne me forme. Actuellement, ce qui m'enthousiasme sont les applications de l'IA dans le domaine médical (imagerie en particulier), et les méthodes mathématiques/IA en Finance (ainsi que d'autres applications des séries temporelles et des phénomènes aléatoires). Mon Portfolio en construction fera apparaître mes projets en cours.</p>
                <div class="slide-buttons">
                    <a href="<?php echo SITE_URL; ?>/fr/portfolio.php" class="cta-button">Voir mon Portfolio</a>
                </div>
            </div>

        </div>
        <button class="carousel-button prev">&lt;</button>
        <button class="carousel-button next">&gt;</button>
    </section>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>