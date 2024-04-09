<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/formules.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XW4pxKjJ4l4lsLYIvU8W6Hj9XU1B6E/4v0opWZ+tPjKGO4V4YfrYmC8yE3u9XpGBlj5uHVv5UsZ7jfQ5OjckVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- appeler le header -->
    <?php require 'header.php'; ?>

    <!-- onglet -->

    <!-- Shop -->
    <Section class="shop container">
        <h2 class="Section-title">Shop Products</h2>
        <!-- Content -->
        <div class="shop-content">

            <div class='boite_global'>

                <!-- box1 -->
                <div class="product-box">
                    <a href="produit.php">
                        <img src="images/permis-a.jpg" alt="" class="product-img">
                        <img src="images/transitions/1.jpg" alt="" class="product-img">
                    </a>
                    <h2 class="product-title">belle montre</h2>
                    <span class="price">$25</span>
                    <a href='connexion.php'><button type='button' class='button-87' role='button'>En savoir plus</button></a>
                </div>
                <!-- box2 -->
                <div class="product-box">
                    <a href="produit.php">
                        <img src="images/permis-am.jpg" alt="" class="product-img">
                        <img src="images/transitions/2.jpg" alt="" class="product-img">
                    </a>
                    <h2 class="product-title">belle montre</h2>
                    <span class="price">$25</span>
                    <a href='connexion.php'><button type='button' class='button-87' role='button'>En savoir plus</button></a>
                </div>
                <!-- box3 -->
                <div class="product-box">
                    <a href="produit.php">
                        <img src="images/permis-b.jpg" alt="" class="product-img">
                        <img src="images/transitions/3.jpg" alt="" class="product-img">
                    </a>
                    <h2 class="product-title">belle montre</h2>
                    <span class="price">$25</span>
                    <a href='connexion.php'><button type='button' class='button-87' role='button'>En savoir plus</button></a>
                </div>

                <!-- box4 -->
                <div class="product-box">
                    <a href="produit.php">
                        <img src="images/permis-ba.jpg" alt="" class="product-img">
                        <img src="images/transitions/3.jpg" alt="" class="product-img">
                    </a>
                    <h2 class="product-title">belle montre</h2>
                    <span class="price">$25</span>
                    <a href='connexion.php'><button type='button' class='button-87' role='button'>En savoir plus</button></a>
                </div>

            </div>


        </div>
    </Section>
    
    <script src="js/theme-toggle.js"></script>
</body>

<?php
    require_once "footer.php";
?>

</html>