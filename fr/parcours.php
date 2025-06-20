<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>Mon Parcours</h1>
    <p class="page-intro">Un aperçu de mon parcours académique et de ma formation continue, qui ont forgé ma capacité à aborder des problèmes variés avec une méthodologie rigoureuse.</p>
    
    <?php include __DIR__ . "/../includes/parcours/phd_{$current_lang}.php"; ?>

    <?php // Plus tard, nous ajouterons les autres blocs de la même manière ?>
    <?php // include __DIR__ . '/../includes/parcours/master-maths.php'; ?>
    <?php // include __DIR__ . '/../includes/parcours/formations-tech.php'; ?>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>