<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <h1>Un Autre Regard</h1>

    <div class="page-intro" style="max-width: 800px; margin-left: auto; margin-right: auto;">
        <p>Nous sommes divers et variés, et capables de faire de grandes choses, bâtir une entreprise, courir un marathon, réussir une tarte aux fraises ou de longues études, mais nous nous y prenons tous différemment. Certaines personnes s'y prennent très différemment, et c'est bien!</p>
        <p>Mon institutrice de maternelle m'a soupçonné d'être autiste. Elle avait raison, mais ce n'est que 40 ans plus tard que j'en ai pris conscience, que j'ai ressenti le besoin d'un diagnostic. Entre collaborateurs, nous nous entraidons pour réaliser des choses infaisables seuls. Un collaborateur autiste veut vous aider, et vous voulez l'aider pas pour ce qu'il est, mais parce que c'est le processus d'entraide, et c'est tout. Pour que ça se fasse bien, il faut savoir qu'une personne très différente fonctionne très différemment, mais à la fin, ça ne coûte pas plus cher!</p>
        <p>Cette section sera moins sérieuse qu'elle n'en a l'air. Elle vise seulement par de courtes anecdotes à vous aider à penser différemment et à mieux comprendre les gens comme moi, pour collaborer aussi facilement qu'avec un autre!</p>
    </div>
    
    <hr style="border-color: rgba(255,255,255,0.1); margin: 40px auto; max-width: 800px;">

    <?php
    // --- Début du script d'affichage aléatoire ---

    // 1. On charge notre "bibliothèque" d'anecdotes
    include_once __DIR__ . '/../includes/anecdotes_neuro_fr.php';

    // On vérifie que le tableau existe et n'est pas vide
    if (isset($anecdotes_neuro) && !empty($anecdotes_neuro)) {
        // 2. On mélange le tableau dans un ordre aléatoire
        shuffle($anecdotes_neuro);

        // 3. On ne garde que les 3 premières anecdotes
        $anecdotes_a_afficher = array_slice($anecdotes_neuro, 0, 3);

        // 4. On boucle sur ces 3 anecdotes pour les afficher
        echo '<div class="anecdotes-section">';
        foreach ($anecdotes_a_afficher as $anecdote) {
            // On utilise la classe .anecdote-item que nous avons déjà stylisée
            echo '<div class="anecdote-item"><p>' . $anecdote . '</p></div>';
        }
        echo '</div>';
    }
    // --- Fin du script ---
    ?>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>