<?php
// --- DÉBUT DU BLOC DE LOGIQUE ---
// On récupère le nom du fichier de la page actuelle
$current_page = basename($_SERVER['PHP_SELF']);

// On construit les URLs pour les deux langues
$fr_link = "/site-personnel-freelance/fr/" . $current_page;
$en_link = "/site-personnel-freelance/en/" . $current_page;
// --- FIN DU BLOC DE LOGIQUE ---
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="/site-personnel-freelance/css/style.css">
    
    <link rel="alternate" hreflang="fr" href="http://localhost<?php echo $fr_link; ?>" />
    <link rel="alternate" hreflang="en" href="http://localhost<?php echo $en_link; ?>" />
    <link rel="alternate" hreflang="x-default" href="http://localhost<?php echo $en_link; ?>" />

</head>
<body>

<header>
    <div class="language-switcher">
        <a href="<?php echo $fr_link; ?>"><img src="/site-personnel-freelance/images/drapeau-fr.svg" alt="Version Française" width="24"></a>
        <a href="<?php echo $en_link; ?>"><img src="/site-personnel-freelance/images/drapeau-uk.svg" alt="English Version" width="24"></a>
    </div>

    <nav>
        <ul>
            <li><a href="/site-personnel-freelance/<?php echo $lang; ?>/">Accueil</a></li>
            <li><a href="/site-personnel-freelance/<?php echo $lang; ?>/expertise.php">Expertise</a></li>
            <li><a href="/site-personnel-freelance/<?php echo $lang; ?>/a-propos.php">Parcours & Vision</a></li>
            <li><a href="/site-personnel-freelance/<?php echo $lang; ?>/portfolio.php">Portfolio</a></li>
            <li><a href="/site-personnel-freelance/<?php echo $lang; ?>/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>