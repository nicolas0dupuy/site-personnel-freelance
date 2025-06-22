<?php
// On indique au navigateur que la réponse sera au format JSON
header('Content-Type: application/json');

// On détermine la langue ('fr' ou 'en') grâce à un paramètre dans l'URL
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'fr';
$anecdotes_file = __DIR__ . "/includes/anecdotes_neuro_{$lang}.php";

// On s'assure que le fichier d'anecdotes existe avant de l'inclure
if (file_exists($anecdotes_file)) {
    include_once $anecdotes_file;

    // On vérifie que le tableau $anecdotes_neuro existe et n'est pas vide
    if (isset($anecdotes_neuro) && !empty($anecdotes_neuro)) {
        shuffle($anecdotes_neuro);
        $anecdotes_a_afficher = array_slice($anecdotes_neuro, 0, 3);
        
        // On encode le tableau PHP en chaîne de caractères JSON et on l'affiche
        echo json_encode($anecdotes_a_afficher);
    } else {
        // En cas d'erreur, on renvoie un tableau JSON vide
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}
?>