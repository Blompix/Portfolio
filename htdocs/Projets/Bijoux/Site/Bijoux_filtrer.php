<?php
require_once "base.php";
session_start();

$loggedIn = isset($_SESSION['ID_CLIENT']);
$addToCart = isset($_POST['addToCart']);
$showList = isset($_POST['boutton']); // Ajout de la vérification pour le bouton "boutton"

if (!$loggedIn && $addToCart) {
    header("Location: connexion.php");
    exit();
}

// Ajout de la condition pour la redirection vers la liste des produits
if ($showList) {
    header("Location: listeProduits.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/Bijoux.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XW4pxKjJ4l4lsLYIvU8W6Hj9XU1B6E/4v0opWZ+tPjKGO4V4YfrYmC8yE3u9XpGBlj5uHVv5UsZ7jfQ5OjckVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
    document.getElementById("filtrerButton").addEventListener("click", function() {
        window.location.href = "Bijoux_filtrer.php";
    });

</script>

</head>
<body>
    <!-- Inclure le header -->
    <?php require 'header.php'; ?>

    <!-- Shop -->
    <section class="shop container">
        <h2 class="Section-title">Shop Products

            <h2 class="Section-title"> voici la liste des produit compris entre 80 et 150 euros</h2>
            <!-- Ajout du bouton "boutton" pour afficher la liste des produits -->

        </h2>
        
        <!-- Content -->

        <div class="shop-content">
            <!-- Box -->
            <form action="" method="post"> <!-- Modification de l'action du formulaire -->
                <?php
                // Modification de la requête SQL pour sélectionner les produits entre 80 et 150 euros
                $sql = "SELECT * FROM bijoux WHERE prix >= 80 AND prix <= 150";
                $result = mysqli_query($conn, $sql);
                echo "<div class='wrapper'>";
                while ($myrow = $result->fetch_array()) {
                    echo "<div class='product-box'>";
                    echo '<a href="Description.php?id=' . $myrow["ID_BIJOUX"] . '">';
                    echo "<img src='images/produit/" . $myrow["ID_BIJOUX"] . ".jpg' alt='' class='product-img'/>
                          <img src='images/transitions/" . $myrow["ID_BIJOUX"] . ".jpg' alt='' class='product-img'/>";
                    echo "<h2 class='product-title'>";
                    echo $myrow["nom"];
                    echo "</h2>";
                    echo "<div class='etoile'>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                    echo "</div>";
                    echo "<span class='price'>";
                    echo $myrow["prix"];
                    echo "€</span>";
                    echo "<div class='btn_favorie'>";
                    if ($loggedIn) {
                        echo "<button type='submit' name='addToCart' value='" . $myrow["ID_BIJOUX"] . "' class='button-87' role='button'>Ajouter au panier</button>";
                    } else {
                        echo "<a href='connexion.php'><button type='button' class='button-87' role='button'>Connectez-vous pour ajouter au panier</button></a>";
                    }
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                ?>
            </form>
        </div>
    </section>
    <!-- Inclure le footer -->
    <?php require_once "Footer.php"; ?>
</body>
</html>
