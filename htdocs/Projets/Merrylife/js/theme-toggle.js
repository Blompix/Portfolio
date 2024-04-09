function toggleTheme() {
    var body = document.getElementById("header");
    var themeToggle = document.getElementById("theme-icon");

    // Toggle entre les classes 'dark-theme' et ''
    body.classList.toggle("dark-theme");

    // Changer l'icône en conséquence
    if (body.classList.contains("dark-theme")) {
        themeToggle.src = 'images/icon/day-mode.png';
    } else {
        themeToggle.src = 'images/icon/night-mode.png';
    }
}

// Ajouter une classe 'hover' pendant le survol du bouton
document.querySelector(".theme-toggle").addEventListener("mouseover", function () {
    this.classList.add("hover");
});

// Supprimer la classe 'hover' lorsque le curseur quitte le bouton
document.querySelector(".theme-toggle").addEventListener("mouseout", function () {
    this.classList.remove("hover");
});
