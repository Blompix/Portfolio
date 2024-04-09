<?php
// inclure la page de connexion
require_once "base.php";

// vérifier si une session existe
if (!isset($_SESSION)) {
    // si non, démarrer la session
    session_start();
}

// créer la session du panier s'il n'existe pas
if (!isset($_SESSION['panier'])) {
    // s'il n'existe pas de session panier, créer une et initialiser avec un tableau vide
    $_SESSION['panier'] = array();
}

// récupération de l'id depuis le lien
if (isset($_GET['id'])) { // si un id exsite
    $id = $_GET['id'];

    // vérifier si le produit existe dans la base de données en utilisant l'id
    $produit = mysqli_query($conn, "SELECT * FROM bijou WHERE ID_BIJOUX = $id");

    if (mysqli_num_rows($produit) == 0) {
        // si ce produit n'existe pas
        die("Ce produit n'existe pas");
    }

    // ajouter le produit dans le panier (le tableau)
    if (isset($_SESSION['panier'][$id])) { // si le produit est déjà dans le panier
        $_SESSION['panier'][$id]++; // augmenter la quantité
    } else {
        // si non, ajouter le produit avec une quantité de 1
        $_SESSION['panier'][$id] = 1;
    }

    // mettre le script en pause pendant 3 secondes
    sleep(3);

    // afficher un message d'alerte en utilisant JavaScript
    echo '<script>alert("Le produit a été ajouté au panier.");</script>';

    // redirection vers la page index.php
    header("Location: Bijoux.php");
}
?>
