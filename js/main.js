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

// On exécute le code seulement si le carrousel existe sur la page
if (track) {
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.carousel-button.next');
    const prevButton = document.querySelector('.carousel-button.prev');
    const slideWidth = slides[0].getBoundingClientRect().width;
    let currentIndex = 0;

    const moveToSlide = (targetIndex) => {
        track.style.transform = 'translateX(-' + slideWidth * targetIndex + 'px)';
        currentIndex = targetIndex;
        updateButtonsState();
    }

    const updateButtonsState = () => {
        prevButton.style.display = (currentIndex === 0) ? 'none' : 'block';
        nextButton.style.display = (currentIndex === slides.length - 1) ? 'none' : 'block';
    }

    nextButton.addEventListener('click', () => {
        if (currentIndex < slides.length - 1) moveToSlide(currentIndex + 1);
    });

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) moveToSlide(currentIndex - 1);
    });
    
    updateButtonsState(); // Pour cacher la flèche "précédent" au chargement
}

});