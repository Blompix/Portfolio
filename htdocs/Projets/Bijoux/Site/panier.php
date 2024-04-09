<?php
session_start();
require_once "base.php";

if (!isset($_SESSION['Mail'])) {
    header("Location: connexion.php");
    exit();
}

$total = 0;
$ids = array();

if (isset($_SESSION['panier'])) {
    $ids = array_keys($_SESSION['panier']);
}

if (isset($_GET['del']) && is_numeric($_GET['del'])) {
    $productId = $_GET['del'];
    if (array_key_exists($productId, $_SESSION['panier'])) {
        unset($_SESSION['panier'][$productId]);
        header("Location: panier.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="css/panier.css">
</head>
<body class="panier">
    <?php require_once "header.php"; ?>
    <a href="Accueil.php" class="link">Boutique</a>
    <section class="container">
        <table>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php 
            if (empty($ids)) {
                echo "<tr><td colspan='5'>Votre panier est vide</td></tr>";
            } else {
                foreach ($_SESSION['panier'] as $productId => $quantity) {
                    $product = mysqli_query($conn, "SELECT * FROM bijou WHERE ID_BIJOUX = $productId");
                    $productData = mysqli_fetch_assoc($product);
                    
                    echo "<tr>";
                    echo "<td><img src='images/produit/{$productId}.jpg' width='100' height='100'></td>";
                    echo "<td>{$productData['nom']}</td>";
                    echo "<td>{$productData['prix']}€</td>";
                    echo "<td>$quantity</td>";
                    echo "<td><a href='panier.php?del=$productId'><img src='images/supp.png' id='supp' width='20' height='20'></a></td>";
                    echo "</tr>";
                    
                    $subtotal = $productData['prix'] * $quantity;
                    $total += $subtotal;
                }
            }
            ?>
            <tr class="total">
                <th>Total : <?=$total?>€</th>
            </tr>
        </table>
    </section>
</body>
</html>
