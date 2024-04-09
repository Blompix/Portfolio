<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/shop.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <?php
        require_once "header.php"
        ?>
    <!-- ongelt -->
    

    <!-- Shop -->
    <Section class="shop container">
        <h2 class="Section-title">Shop Products</h2>
        <!-- Content -->
        <div class="shop-content">
            <!-- box1 -->
            <div class="product-box">
                <a href="produit.php">
                    <img src="images/produit/1.jpg" alt="" class="product-img">
                    <img src="images/transitions/1.jpg" alt="" class="product-img">
                </a>
                <h2 class="product-title">belle montre</h2>
                <div class="etoile">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <span class="price">$25</span>
                <i class='bx bxs-heart add-cart' ></i>
            </div>
            <!-- box2 -->
            <div class="product-box">
                <a href="produit.php">
                    <img src="images/produit/2.jpg" alt="" class="product-img">
                    <img src="images/transitions/2.jpg" alt="" class="product-img">
                </a>
                <h2 class="product-title">belle montre</h2>
                <div class="etoile">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <span class="price">$25</span>
                <i class='bx bxs-heart add-cart' ></i>
            </div>
            <!-- box3 -->
            <div class="product-box">
                <a href="produit.php">
                    <img src="images/produit/3.jpg" alt="" class="product-img">
                    <img src="images/transitions/3.jpg" alt="" class="product-img">
                </a>
                <h2 class="product-title">belle montre</h2>
                <div class="etoile">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <span class="price">$25</span>
                <i class='bx bxs-heart add-cart' ></i>
            </div>
            
        </div>
    </Section>
</body>
</html>