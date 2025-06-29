<?php include_once __DIR__ . '/config.php'; // On inclut notre nouvelle configuration ?> 
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_URL; ?>/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_URL; ?>/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_URL; ?>/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="<?php echo SITE_URL; ?>/favicon_io//site.webmanifest">

    <?php foreach ($pages as $key => $titles): ?>
        <link rel="alternate" hreflang="fr" href="<?php echo SITE_URL; ?>/fr/<?php echo $key === 'index' ? '' : $key . '.php'; ?>" />
        <link rel="alternate" hreflang="en" href="<?php echo SITE_URL; ?>/en/<?php echo $key === 'index' ? '' : $key . '.php'; ?>" />
    <?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?php echo SITE_URL; ?>/en/" />
</head>
<body>

<header>
    
    <div class="language-switcher">
        <a href="<?php echo SITE_URL; ?>/fr/<?php echo $current_page_key === 'index' ? '' : $current_page_key . '.php'; ?>"><img src="<?php echo SITE_URL; ?>/images/drapeau-fr.svg" alt="Version Française" width="24"></a>
        <a href="<?php echo SITE_URL; ?>/en/<?php echo $current_page_key === 'index' ? '' : $current_page_key . '.php'; ?>"><img src="<?php echo SITE_URL; ?>/images/drapeau-uk.svg" alt="English Version" width="24"></a>
    </div>

    <button id="menu-toggle" class="menu-toggle">
        <span class="bar"></span><span class="bar"></span><span class="bar"></span>
    </button>

    <nav id="main-nav">
        <ul>
            <?php foreach ($pages as $key => $titles): ?>
                <li>
                    <a href="<?php echo SITE_URL; ?>/<?php echo $current_lang; ?>/<?php echo $key === 'index' ? '' : $key . '.php'; ?>">
                        <?php echo $titles[$current_lang]; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>