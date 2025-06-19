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

});