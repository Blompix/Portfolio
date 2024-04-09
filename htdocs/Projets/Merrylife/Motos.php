<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voitures</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/Voitures.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XW4pxKjJ4l4lsLYIvU8W6Hj9XU1B6E/4v0opWZ+tPjKGO4V4YfrYmC8yE3u9XpGBlj5uHVv5UsZ7jfQ5OjckVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Ajout du script JavaScript pour gérer le clic -->

</head>

<body>
    <!-- Inclure le header -->
    <?php require 'Header.php'; ?>

    <!-- Shop -->
    <section class="shop container">
        <h2 class="Section-title"><a>Les Motos</a></h2>

        <!-- Content -->

        <div class="shop-content">
            <!-- Box -->

            <div class='wrapper'>

                <!--KTM 2020-->
                <div class='product-box'>
                    <img src='images/moto/KTM 2020.jpg' alt='' class='product-img' />
                    <img src='images/transisionm/KTM 2020.jpg' alt='' class='product-img' />
                    <h2 class='product-title'>KTM 2020</h2>
                    <span class='price'>1500 Coins</span>
                    <div class='btn_favorie'>
                        <button type='submit' class='button-87' role='button'>Acheter</button>
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