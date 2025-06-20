window.addEventListener('load', function() {

    /**
     * Gère l'ouverture et la fermeture du menu mobile (hamburger).
     */
    function initMobileMenu() {
        const menuToggle = document.getElementById('menu-toggle');
        const mainNav = document.getElementById('main-nav');

        if (menuToggle && mainNav) {
            menuToggle.addEventListener('click', function() {
                mainNav.classList.toggle('is-open');
            });
        }
    }

    /**
     * Initialise toute la logique du carrousel, mais uniquement sur les écrans mobiles.
     */
    function initCarousel() {
        // window.matchMedia est la manière moderne de vérifier une Media Query en JS
        if (window.matchMedia('(max-width: 768px)').matches) {
            const track = document.querySelector('.carousel-track');

            if (track) {
                // ... TOUTE VOTRE LOGIQUE DE CARROUSEL EXISTANTE VA ICI ...
                // (Je ne la remets pas pour la lisibilité, mais c'est le même code)
            }
        }
    }

    // --- Lancement des initialisations ---
    initMobileMenu();
    initCarousel();

    // On pourrait aussi relancer initCarousel lors du redimensionnement de la fenêtre
    // C'est une amélioration possible pour plus tard.
});