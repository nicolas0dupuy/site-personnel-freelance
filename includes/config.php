<?php
// =================================================================
// FICHIER DE CONFIGURATION PRINCIPAL
// =================================================================

// --- Paramètres du Site ---
define('SITE_URL', 'http://localhost/site-personnel-freelance');
define('SITE_NAME', 'Nicolas Dupuy');

// --- Définition des Pages ---
// On centralise ici toutes les informations sur les pages du site.
// C'est facile à mettre à jour !
$pages = [
    'index' => [
        'fr' => 'Accueil',
        'en' => 'Home'
    ],
    // Nouvelle page "Services"
    'services' => [
        'fr' => 'Services',
        'en' => 'Services'
    ],
    // Nouvelle page "Parcours"
    'parcours' => [
        'fr' => 'Mon Parcours',
        'en' => 'My Journey'
    ],
    'portfolio' => [
        'fr' => 'Portfolio',
        'en' => 'Portfolio'
    ],
    'contact' => [
        'fr' => 'Contact',
        'en' => 'Contact'
    ]
];

// --- Logique pour déterminer la page et la langue actuelles ---
// Détecte la langue en se basant sur le dossier /fr/ ou /en/ dans l'URL
$current_lang = (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) ? 'en' : 'fr';
$current_page_key = basename($_SERVER['SCRIPT_NAME'], '.php');
$page_title = isset($pages[$current_page_key]) ? $pages[$current_page_key][$current_lang] . ' | ' . SITE_NAME : SITE_NAME;