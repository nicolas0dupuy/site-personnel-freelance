// On attend que le document HTML soit entièrement chargé avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function() {

    // On sélectionne le bouton et le menu grâce à leur ID
    const menuToggle = document.getElementById('menu-toggle');
    const mainNav = document.getElementById('main-nav');

    // Si le bouton existe bien sur la page...
    if (menuToggle) {
        // ...on écoute l'événement 'click' dessus.
        menuToggle.addEventListener('click', function() {
            // À chaque clic, on ajoute ou on enlève la classe 'is-open' sur le menu.
            mainNav.classList.toggle('is-open');
        });
    }
    // --- Logique du Carrousel ---
const track = document.querySelector('.carousel-track');

if (track) {
    const allSlides = Array.from(track.children);
    const nextButton = document.querySelector('.carousel-button.next');
    const prevButton = document.querySelector('.carousel-button.prev');
    let slideWidth = allSlides[0].getBoundingClientRect().width;
    let currentIndex = 1;

    // --- MISE EN PLACE (ne change pas) ---
    const firstClone = allSlides[0].cloneNode(true);
    const lastClone = allSlides[allSlides.length - 3].cloneNode(true); // Correction : on clone les vraies slides
    firstClone.id = 'first-clone';
    lastClone.id = 'last-clone';
    track.append(firstClone);
    track.prepend(lastClone);
    const slidesWithClones = Array.from(track.children);
    track.style.transition = 'none';
    track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
    setTimeout(() => {
        track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)';
    });

    // --- FONCTIONS D'ACTION (NOUVEAU) ---
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

    // --- "SAUT MAGIQUE" (ne change pas) ---
    track.addEventListener('transitionend', () => {
        if (slidesWithClones[currentIndex].id === 'last-clone') {
            track.style.transition = 'none';
            currentIndex = slidesWithClones.length - 2;
            track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
            setTimeout(() => { track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)'; });
        }
        if (slidesWithClones[currentIndex].id === 'first-clone') {
            track.style.transition = 'none';
            currentIndex = 1;
            track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
            setTimeout(() => { track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)'; });
        }
    });

    // --- AUTOPLAY INTELLIGENT (CORRIGÉ) ---
    let autoplayTimer;
    let autoplayInterval;

    const startAutoplay = () => {
        clearInterval(autoplayInterval);
        // L'autoplay appelle directement l'action, PAS le clic
        autoplayInterval = setInterval(goToNextSlide, 8000);
    };

    const resetAutoplayTimer = () => {
        clearTimeout(autoplayTimer);
        clearInterval(autoplayInterval);
        autoplayTimer = setTimeout(startAutoplay, 15000);
    };

    // LES ÉVÉNEMENTS UTILISATEUR
    nextButton.addEventListener('click', () => {
        goToNextSlide();      // Déclenche l'action
        resetAutoplayTimer(); // ET réinitialise le minuteur d'inactivité
    });

    prevButton.addEventListener('click', () => {
        goToPrevSlide();      // Déclenche l'action
        resetAutoplayTimer(); // ET réinitialise le minuteur d'inactivité
    });

    // GESTION REDIMENSIONNEMENT (ne change pas, mais important)
    window.addEventListener('resize', () => {
        slideWidth = allSlides[0].getBoundingClientRect().width;
        track.style.transition = 'none';
        track.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
        setTimeout(() => { track.style.transition = 'transform 0.7s cubic-bezier(0.65, 0, 0.35, 1)'; });
    });

    // Lancement initial
    resetAutoplayTimer();
}

});