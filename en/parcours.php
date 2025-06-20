<?php include __DIR__ . '/../includes/header.php'; ?>
<main>
    <h1>My Journey</h1> <p class="page-intro">An overview of my academic and continuous learning journey...</p>

    <?php include __DIR__ . "/../includes/parcours/phd_{$current_lang}.php"; ?>

    <?php // ... autres blocs ... ?>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>