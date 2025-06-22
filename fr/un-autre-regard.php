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
    include_once __DIR__ . "/../includes/anecdotes_neuro_{$current_lang}.php";

    if (isset($anecdotes_neuro) && !empty($anecdotes_neuro)) {
        shuffle($anecdotes_neuro);
        $anecdotes_a_afficher = array_slice($anecdotes_neuro, 0, 3);
        echo '<div class="anecdotes-section" id="anecdotes-container">';
        foreach ($anecdotes_a_afficher as $anecdote) {
            echo '<div class="anecdote-item"><p>' . $anecdote . '</p></div>';
        }
        echo '</div>';

        $api_url = SITE_URL . '/get_anecdotes.php';
echo '<div class="reload-container"><button id="reload-anecdotes" class="button-reload" data-api-url="' . $api_url . '">Afficher d\'autres anecdotes</button></div>';
        
    }
    ?>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>