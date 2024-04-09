// Fonction pour afficher ou masquer le bouton en fonction du défilement de la page
function toggleScrollToTopButton() {
    var scrollToTopBtn = document.getElementById('scrollToTopBtn');
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
}

// Fonction pour faire défiler la page vers le haut lorsque le bouton est cliqué
function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Écouteur d'événements pour déclencher la fonction de bascule du bouton
window.onscroll = function() {
    toggleScrollToTopButton();
};

// Écouteur d'événements pour déclencher la fonction de retour en haut
document.getElementById('scrollToTopBtn').addEventListener('click', function() {
    scrollToTop();
});



/*---------------------------------------------------------------------------------------------------------------*/
// Fonction pour créer des bulles de soda
function createSodaBubble() {
    var bubble = document.createElement('div');
    bubble.className = 'sodaBubble';
    bubble.style.left = Math.random() * window.innerWidth + 'px';
    document.getElementById('sodaBubblesContainer').appendChild(bubble);

    // Supprime la bulle après l'animation
    bubble.addEventListener('animationend', function() {
        bubble.remove();
    });
}

// Fonction pour générer des bulles de soda aléatoirement
function generateSodaBubbles() {
    setInterval(function() {
        createSodaBubble();
    }, 1000);
}

// Appel de la fonction pour générer les bulles de soda
generateSodaBubbles();
