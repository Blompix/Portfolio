<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MerryLife</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/Index.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XW4pxKjJ4l4lsLYIvU8W6Hj9XU1B6E/4v0opWZ+tPjKGO4V4YfrYmC8yE3u9XpGBlj5uHVv5UsZ7jfQ5OjckVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- Inclure le header -->
<?php require 'Header.php'; ?>

<body>


    <main>

        <!-- Bienvenue -->
        <div class="hero-section">
            <div class="container">
                <p>Explorez la ville, créez votre propre histoire et participez à des aventures palpitantes!</p>
                <a href="https://cfx.re/join/5eoypa" class="btn">Rejoindre le serveur dès maintenant</a>
            </div>
        </div>

        <!-- Shop -->
        <section class="groupe">
            <i class="Section-Gtitre">Les groupes</i>
        </section>

        <section class="L-I">
            <div class="Groupes-l-i">

                <!-- box légal -->
                <div class="box" id="legale">
                    <a href="https://discord.gg/ejkFBqZKn2">
                        <img src="images/légal.png" alt="" class="box-img">
                    </a>
                    <h2 class="titre-légale">Légal</h2>
                    <a href='https://discord.gg/ejkFBqZKn2'><button type='button' class='button-87' role='button'>Discord</button></a>
                    <a href='Légal.php'><button type='button' class='button-87' role='button'>En savoir plus</button></a>
                </div>

                <!-- box illégal-->
                <div class="box" id="illégal">
                    <a href="https://discord.gg/G9NpRgey">
                        <img src="images/illégal.png" alt="" class="box-img">
                    </a>
                    <h2 class="titre-illégal">illégal</h2>
                    <a href='https://discord.gg/G9NpRgey'><button type='button' class='button-illégal' role='button'>Discord</button></a>
                    <a href='Illégal.php'><button type='button' class='button-illégal' role='button'>En savoir plus</button></a>
                </div>

            </div>

        </section>



        <section id="instructeur">
            <section class="groupe">
                <i class="Section-Gtitre">Les Fondateurs</i>
            </section>
            <div class="container1">
                <div class="moniteur-list">
                    <div class="Fonda">
                        <img src="images/iswz.png" alt="Instructeur 1">
                        <h3>iswz</h3>
                        <p>Le GF c'est son truc </p>
                    </div>

                    <div class="Fonda">
                        <img src="images/lewall.jpg" alt="Instructeur 2">
                        <h3>lewall</h3>
                        <p>Ecoute H24 spotify la rumeur raconte qu'il dort jamais</p>
                    </div>

                    <div class="Fonda">
                        <img src="images/Topic.jpg" alt="Instructeur 2">
                        <h3>Topic</h3>
                        <p>Un bon fonda , le meilleur d'après MerryLife - Sécurité</p>
                    </div>

                    <div class="Fonda">
                        <img src="images/arouf.png" alt="Instructeur 2">
                        <h3>Arouf</h3>
                        <p>Le meilleur des développeurs si il n'a pas la flemme</p>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once "Haut.php"; ?>
    </main>

    <?php require_once "Footer.php"; ?>

</body>



</html>