<?php
session_start();

if (isset($_SESSION['Mail'])) {
    // Si l'utilisateur est connecté, détruisez la session
    session_destroy();
    header('Location: Accueil.php'); // Redirigez l'utilisateur vers la page d'accueil ou une autre page de votre choix après la déconnexion.
    exit();
} else {
    // Si l'utilisateur n'était pas connecté, vous pouvez rediriger vers une page de connexion ou afficher un message d'erreur.
    header('Location: Connexion.php'); // Redirigez vers la page de connexion.
    exit();
}
?>