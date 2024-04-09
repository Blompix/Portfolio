$(document).ready(function() {
    // Sélectionner l'icône du thème
    var themeToggle = $('#theme-toggle');

    // Fonction pour changer le thème
    function toggleTheme() {
        $('body').toggleClass('dark-theme'); // Ajouter ou supprimer la classe 'dark-theme' au body
    }

    // Écouter l'événement clic sur l'icône du thème
    themeToggle.on('click', function() {
        toggleTheme(); // Appeler la fonction pour changer le thème
    });
});