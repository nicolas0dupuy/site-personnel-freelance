<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>Mon Parcours</h1>
    <p class="page-intro">Un aperçu de mon parcours académique et de ma formation continue, qui ont forgé ma capacité à aborder des problèmes variés avec une méthodologie rigoureuse.</p>

    <nav class="page-nav">
    <details>
        <summary>Sommaire du Parcours</summary>
        <ul>
            <li><a href="#data">Data Science & IA</a></li>
            <li><a href="#maths">Cursus Mathématiques</a></li>
            <li><a href="#phd">Doctorat en Physique</a></li>
            <li><a href="#langues">Langues & Cultures</a></li>
            <li><a href="#hobbies">Engagements & Hobbies</a></li>
        </ul>
    </details>
</nav>

    <?php include __DIR__ . "/../includes/parcours/data-science_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/phd_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/master_maths_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/langues_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/hobbies_{$current_lang}.php"; ?>
    

    <?php // Plus tard, nous ajouterons les autres blocs de la même manière ?>
        <?php // include __DIR__ . '/../includes/parcours/master-maths.php'; ?>
    <?php // include __DIR__ . '/../includes/parcours/formations-tech.php'; ?>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>