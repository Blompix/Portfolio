<!DOCTYPE html>
<html>
<?php
$conn = mysqli_connect("localhost", "root", "", "bijoux", 3308);
$conn->set_charset("utf8");
?>

<head>
    <meta charset="utf-8">
    <title>Description du produit</title>
    <link rel="stylesheet" href="css/Description.css">
</head>

<body>
    <?php
    require_once "header.php";
    ?>
    <main>
        <?php
        if (!$conn) {
            die("Échec de la connexion à la base de données: " . mysqli_connect_error());
        }
        // récupérer la variable ID que j'avais mis dans l'url 
        $id = $_GET["id"];
        // prendre tout ce qui est dans bijou et qui a le ID_BIJOUX 
        $sql = "SELECT * FROM bijou WHERE ID_BIJOUX = $id";

        $result = mysqli_query($conn, $sql);
        $product = mysqli_fetch_assoc($result);
        echo '<div class="product">';
        echo '  <div class="product-image">';
        echo "<img src='images/produit/" . $product["ID_BIJOUX"] . ".jpg' alt='' class='product-img'/>";
        echo '  </div>';
        echo '  <div class="product-details">';
        echo '    <h2>' . $product['nom'] . '</h2>';
        echo '    <p>' . $product['description'] . '</p>';
        echo '    <p>Prix: $' . $product['prix'] . '</p>';
        echo '    <a href="payer.php" class="button-87">Acheter maintenant</a>';
        echo '  </div>';
        echo '</div>';

        // Fermer la connexion à la base de données
        mysqli_close($conn);
        ?>
    </main>
    <?php
    require_once "Footer.php";
    ?>
</body>

</html>
