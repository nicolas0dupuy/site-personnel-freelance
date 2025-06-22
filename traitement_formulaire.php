<?php
// Démarrer la session en tout premier
session_start();

// Si le formulaire est soumis et que le champ 'lang' existe...
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lang'])) {
    // ...on sauvegarde la langue ('fr' ou 'en') dans la session.
    $_SESSION['form_lang'] = $_POST['lang'];
}

// NOTE : On ne fait AUCUNE validation ici. La validation se fera sur la page de contact elle-même.
// Pour l'instant, on redirige toujours vers la page d'erreur pour nos tests.
// Le vrai code de mail() sera activé plus tard.
header("Location: erreur.php");
exit();
?>