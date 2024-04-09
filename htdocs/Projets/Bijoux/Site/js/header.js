
const searchIcon = document.querySelector("#search-icon");
const searchBox = document.querySelector(".search-box");

searchIcon.addEventListener("click", function () {
    searchBox.classList.toggle("show");
});


$(document).ready(function() {
    // Déconnexion de l'utilisateur
    $(".leave-icon").click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "leave.php",
            type: "POST",
            success: function(response) {
                // Rediriger vers la page de connexion ou autre action souhaitée
                window.location.href = "connexion.php";
            }
        });
    });
});