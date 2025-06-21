<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>My Journey</h1>
    <p class="page-intro">An overview of my academic and continuous learning journey, which has forged my ability to approach various problems with a rigorous methodology.</p>
    <nav class="page-nav">
        <details>
            <summary>Journey Overview</summary>
            <ul>
                <li><a href="#data">Data Science & AI</a></li>
                <li><a href="#maths">Mathematics</a></li>
                <li><a href="#phd">PhD. in Physics</a></li>
                <li><a href="#langues">Languages & Cultures</a></li>
                <li><a href="#hobbies">Hobbies & Commitments</a></li>
            </ul>
        </details>
    </nav>
    

    <?php include __DIR__ . "/../includes/parcours/data-science_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/phd_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/master_maths_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/langues_{$current_lang}.php"; ?>
    <?php include __DIR__ . "/../includes/parcours/hobbies_{$current_lang}.php"; ?>
    
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>