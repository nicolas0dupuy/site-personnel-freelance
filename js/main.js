/**
 * Attend que toute la page (HTML, CSS, images) soit entièrement chargée
 * pour garantir que les mesures de taille des éléments sont correctes.
 */
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
        // window.matchMedia est la manière moderne et fiable de vérifier une Media Query en JS.
        // Le script du carrousel ne s'exécutera que si la largeur de l'écran est <= 768px.
        if (window.matchMedia('(max-width: 768px)').matches) {
            
            const track = document.querySelector('.carousel-track');
            if (!track) return; // Si la piste n'existe pas, on arrête tout.

            // 1. SETUP INITIAL
            const slides = Array.from(track.children).filter(child => child.classList.contains('carousel-slide'));
            if (slides.length === 0) return; // S'il n'y a pas de slides, on arrête.
            
            const nextButton = document.querySelector('.carousel-button.next');
            const prevButton = document.querySelector('.carousel-button.prev');

            // 2. CLONAGE POUR LA BOUCLE INFINIE
            const firstClone = slides[0].cloneNode(true);
            firstClone.id = 'first-clone';
            const lastClone = slides[slides.length - 1].cloneNode(true);
            lastClone.id = 'last-clone';
            track.append(firstClone);
            track.prepend(lastClone);

            const slidesWithClones = Array.from(track.children);
            let slideWidth = slides[0].getBoundingClientRect().width;
            let currentIndex = 1; // On commence sur la première VRAIE slide

            // 3. POSITIONNEMENT INITIAL
            track.style.transition = 'none'; // Pas d'animation pour la mise en place
            track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
            setTimeout(() => { // On réactive la transition juste après
                track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)';
            }, 50);

            // 4. FONCTIONS DE MOUVEMENT
            const goToNextSlide = () => {
                if (currentIndex >= slidesWithClones.length - 1) return;
                currentIndex++;
                track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
            };
            const goToPrevSlide = () => {
                if (currentIndex <= 0) return;
                currentIndex--;
                track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
            };

            // 5. GESTION DE LA BOUCLE (LE "SAUT MAGIQUE")
            track.addEventListener('transitionend', () => {
                if (slidesWithClones[currentIndex].id === 'first-clone') {
                    track.style.transition = 'none';
                    currentIndex = 1;
                    track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
                    setTimeout(() => { track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)'; });
                }
                if (slidesWithClones[currentIndex].id === 'last-clone') {
                    track.style.transition = 'none';
                    currentIndex = slidesWithClones.length - 2;
                    track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
                    setTimeout(() => { track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)'; });
                }
            });

            // 6. AUTOPLAY INTELLIGENT
            let autoplayTimer;
            let autoplayInterval;
            const startAutoplay = () => {
                clearInterval(autoplayInterval);
                autoplayInterval = setInterval(goToNextSlide, 5000);
            };
            const resetAutoplayTimer = () => {
                clearTimeout(autoplayTimer);
                clearInterval(autoplayInterval);
                autoplayTimer = setTimeout(startAutoplay, 20000);
            };

            // 7. ÉVÉNEMENTS UTILISATEUR
            nextButton.addEventListener('click', () => {
                goToNextSlide();
                resetAutoplayTimer();
            });
            prevButton.addEventListener('click', () => {
                goToPrevSlide();
                resetAutoplayTimer();
            });

            // 8. GESTION DU REDIMENSIONNEMENT DE LA FENÊTRE
            window.addEventListener('resize', () => {
                slideWidth = slides[0].getBoundingClientRect().width;
                track.style.transition = 'none';
                track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
                setTimeout(() => { track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)'; });
            });

            // Lancement initial de l'autoplay
            resetAutoplayTimer();
        }
    }

    // --- Lancement des initialisations ---
    initMobileMenu();
    initCarousel();

});