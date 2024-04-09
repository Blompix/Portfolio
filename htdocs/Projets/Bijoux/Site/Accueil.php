<!DOCTYPE html>
<html lang="fr">

<?php
// Connexion à la base de données et démarrage de la session
require_once "base.php";

session_start(); // Démarre la session sur chaque page protégée

if (!isset($_SESSION['Mail'])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    header('Location: connexion.php');
    exit();
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/Accueil.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <?php
        require_once "header.php";
    ?>

    <!-- Shop -->
    <section class="header-serction">
        <div class="moi">
            <div class="row">
                <div class="col-2">
                    <h1> Bienvenue dans la boutique en ligne où vous trouverez à coup sûr tous les bijoux de vos choix !</h1>
                    <p>Naissance, baptême, cadeaux de Noël, fête des mères, des fête des grands-mères ou Saint Valentin,
                        La boutique de bijoux Histoire d'Or vous aide à écrire vos plus belles histoires !
                        En tant que bijoutier n°1 nous avons à cœur de vous proposer le plus large choix possible de bijoux et montres de qualité,
                        d'idées cadeaux, à tous les prix, pour faire plaisir à tous. Pour vous accompagner dans vos plus beaux moments de vie,
                        nos bijoutiers mettent à votre disposition des collections intemporelles et modernes comme notre collection de bijoux bohème.
                        adaptées à tous les goûts</p>
                    <a href=""> explorez maintenant &#10141;</a>
                </div>
                <div class="col-2">
                    <img src="images/commun/1.jpeg" alt="jsp encor  ">
                </div>
            </div>
        </div>
    </section>

    <!-- appeler le la barre quyi defile -->
    <?php
        require_once "shopanim.php"
        ?>

    <!--Section des categories-->
    <section class="categories">
        <div class="moi">
            <h2> Produit Du Moments </h2>
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Meilleur produits-->

    <section class="featured-products">
        <div class="moi">
            <h2> Nouveau Bijoux </h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/produit/1.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="1">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/2.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="2">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/3.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="3">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/4.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="4">Acheter</button> <!-- Bouton Acheter -->
                </div>
            </div>
        </div>
    </section>

    <!-- Dernière ajouts-->

    <section class="featured-products">
        <div class="moi">
            <h2> préférer des Clients </h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/produit/5.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="5">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/6.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="6">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/7.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="7">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/8.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="8">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/9.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="9">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/10.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="10">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/11.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="11">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/12.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="12">Acheter</button> <!-- Bouton Acheter -->
                </div>
                <div class="col-4">
                    <img src="images/produit/13.jpg" alt="">
                    <h3>il est beau le t-shirt</h3>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class "fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>1000 €</p>
                    <button class="buy-button" data-product-id="13">Acheter</button> <!-- Bouton Acheter -->
                </div>
            </div>
        </div>
    </section>

    <?php
        require_once "Footer.php"
    ?>
    <script src="js/leave.js"></script> <!-- Script pour la déconnexion -->
</body>
</html>
