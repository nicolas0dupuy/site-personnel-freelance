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
    'services' => [
        'fr' => 'Services',
        'en' => 'Services'
    ],
    'parcours' => [
        'fr' => 'Mon Parcours',
        'en' => 'My Journey'
    ],
    'un-autre-regard' => [
        'fr' => 'Un Autre Regard',
        'en' => 'A Different View'
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

// --- DÉTECTION DE LANGUE ROBUSTE ET CENTRALISÉE ---

// On démarre la session ici pour qu'elle soit disponible partout
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// On ne définit la langue que si elle ne l'a pas déjà été.
// Cela évite qu'elle soit écrasée par erreur.
if (!isset($current_lang)) {
    // 1. En priorité, on regarde si une langue a été passée par le formulaire via la session.
    if (isset($_SESSION['form_lang'])) {
        $current_lang = $_SESSION['form_lang'];
        unset($_SESSION['form_lang']); // On nettoie la session pour ne l'utiliser qu'une fois
    } 
    // 2. Sinon, on regarde si le chemin de l'URL contient /en/.
    elseif (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) {
        $current_lang = 'en';
    }
    // 3. Sinon, la langue par défaut est le français.
    else {
        $current_lang = 'fr';
    }
}

$current_page_key = basename($_SERVER['SCRIPT_NAME'], '.php');
$page_title = isset($pages[$current_page_key]) ? $pages[$current_page_key][$current_lang] . ' | ' . SITE_NAME : SITE_NAME;