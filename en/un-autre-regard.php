<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>A Different View</h1>

    <div class="page-intro" style="max-width: 800px; margin-left: auto; margin-right: auto;">
        <p>We are diverse and varied, and capable of doing great things—building a business, running a marathon, succeeding at a strawberry tart, or at long studies—but we all go about it differently. Some people go about it very differently, and that's okay!</p>
        <p>My kindergarten teacher suspected I was autistic. She was right, but it wasn't until 40 years later that I put a name to my difference and felt the need for a diagnosis. Fundamentally, all collaboration is about mutual support to achieve things that are impossible alone. Whether your collaborator is autistic or not doesn't change this principle. We help each other because the project requires it. For it to work, you just need to understand one thing: a different person works differently. But in the end, it's not better, not worse, and it doesn't cost more!</p>
        <p>This section, therefore, will be less serious than it looks. Through short anecdotes, it simply aims to give you a few keys to better understand people like me, and to collaborate just as easily as with anyone else.</p>
    </div>
    
    <hr style="border-color: rgba(255,255,255,0.1); margin: 40px auto; max-width: 800px;">

    <?php
    // --- Début du script d'affichage aléatoire ---

    // 1. On inclut notre "bibliothèque" d'anecdotes.
    // La variable $current_lang vaudra 'en' ici, donc PHP cherchera le bon fichier.
    include_once __DIR__ . "/../includes/anecdotes_neuro_{$current_lang}.php";

    // On vérifie que le tableau existe et n'est pas vide
    if (isset($anecdotes_neuro) && !empty($anecdotes_neuro)) {
        // 2. On mélange le tableau dans un ordre aléatoire
        shuffle($anecdotes_neuro);

        // 3. On ne garde que les 3 premières anecdotes
        $anecdotes_a_afficher = array_slice($anecdotes_neuro, 0, 3);

        // 4. On boucle sur ces 3 anecdotes pour les afficher
        echo '<div class="anecdotes-section">';
        foreach ($anecdotes_a_afficher as $anecdote) {
            echo '<div class="anecdote-item"><p>“' . $anecdote . '”</p></div>';
        }
        echo '</div>';
    }
    // --- Fin du script ---
    ?>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>