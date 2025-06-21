<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>Portfolio & Études de Cas</h1>

    <p class="page-intro">
        J'ouvre pour l'instant cette section sur ma thèse doctorale, mais je compte l'enrichir de projets personnels pour vous permettre de mieux évaluer ce que je suis capable de vous apporter. Tant que mon apprentissage restait un processus personnel, j'ignorais la valeur de mes productions et n'en gardais pas trace. Aujourd'hui, je me préoccupe de vos besoins et j'ai à cœur de vous apporter les marques de confiance que vous recherchez.
    </p>

    <?php
    include __DIR__ . "/../includes/portfolio/these-physique_{$current_lang}.php"; 
    ?>

    </main>

<?php include __DIR__ . '/../includes/footer.php'; ?>