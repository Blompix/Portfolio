<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coins</title>
    
    <!-- Icon -->
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/Coins.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XW4pxKjJ4l4lsLYIvU8W6Hj9XU1B6E/4v0opWZ+tPjKGO4V4YfrYmC8yE3u9XpGBlj5uHVv5UsZ7jfQ5OjckVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Ajout du script JavaScript pour gérer le clic -->

</head>

<body>
    <!-- Inclure le header -->
    <?php require 'Header.php'; ?>

    <!-- Shop -->
    <section class="shop container">
        <h2 class="Section-title"><a>Les Coins</a></h2>

        <!-- Content -->

        <div class="shop-content">

                
                <div class='wrapper'>

                    <!-- premier -->
                    <div class='product-box'>
                        <img src='images/Coins.jpg' alt='' class='product-img' />
                        <h2 class='product-title'>1500 Coins</h2>
                        <span class='price'>18 €</span>
                        <div class='btn_favorie'>
                        <a href="https://merrylife.tebex.io/package/5954141"><button type='submit' class='button-87' role='button'>Acheter</button></a>
                        </div>
                    </div>

                    <!-- deuxieme -->
                    <div class='product-box'>
                        <img src='images/Coins.jpg' alt='' class='product-img' />
                        <h2 class='product-title'>3000 Coins</h2>
                        <span class='price'>36 €</span>
                        <div class='btn_favorie'>
                        <a href="https://merrylife.tebex.io/package/5953584"><button type='submit' class='button-87' role='button'>Acheter</button></a>
                        </div>
                    </div>

                    <!-- Répétez cette structure pour chaque produit statique -->
                    <div class='product-box'>
                        <img src='images/Coins.jpg' alt='' class='product-img' />
                        <h2 class='product-title'>4000 Coins</h2>
                        <span class='price'>48 €</span>
                        <div class='btn_favorie'>
                        <a href="https://merrylife.tebex.io/package/5953585"><button type='submit' class='button-87' role='button'>Acheter</button></a>
                        </div>
                    </div>

                    <!-- Répétez cette structure pour chaque produit statique -->
                    <div class='product-box'>
                        <img src='images/Coins.jpg' alt='' class='product-img' />
                        <h2 class='product-title'>5000 + 1000 Coins</h2>
                        <span class='price'>60 €</span>
                        <div class='btn_favorie'>
                        <a href="https://merrylife.tebex.io/package/5953587"><button type='submit' class='button-87' role='button'>Acheter</button></a>
                        </div>
                    </div>

                    <!-- Répétez cette structure pour chaque produit statique -->
                    <div class='product-box'>
                        <img src='images/Coins.jpg' alt='' class='product-img' />
                        <h2 class='product-title'>10000 + 2000 Coins</h2>
                        <span class='price'>120 €</span>
                        <div class='btn_favorie'>
                        <a href="https://merrylife.tebex.io/package/6088558"><button type='submit' class='button-87' role='button'>Acheter</button></a>
                            
                        </div>
                    </div>

                    <!-- Répétez cette structure pour chaque produit statique -->
                    <div class='product-box'>
                        <img src='images/Coins.jpg' alt='' class='product-img' />
                        <h2 class='product-title'>20000 + 5000 Coins</h2>
                        <span class='price'>240 €</span>
                        <div class='btn_favorie'>
                        <a href="https://merrylife.tebex.io/package/6088560"><button type='submit' class='button-87' role='button'>Acheter</button></a>
                        </div>
                    </div>

                    <!-- Répétez cette structure pour chaque produit statique -->
                    <div class='product-box'>
                        <img src='images/Coins.jpg' alt='' class='product-img' />
                        <h2 class='product-title'>30000 + 8500 Coins</h2>
                        <span class='price'>360 €</span>
                        <div class='btn_favorie'>
                        <a href="https://merrylife.tebex.io/package/6088561"><button type='submit' class='button-87' role='button'>Acheter</button></a>
                        </div>
                    </div>
                </div>
                       

        </div>


    </section>
     <!-- boutton monter -->
    <?php require_once "Haut.php"; ?>
    <!-- Inclure le footer -->
    <?php require_once "Footer.php"; ?>
</body>

</html>