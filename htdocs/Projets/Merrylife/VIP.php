<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP</title>
    <link rel="stylesheet" href="css/VIP.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XW4pxKjJ4l4lsLYIvU8W6Hj9XU1B6E/4v0opWZ+tPjKGO4V4YfrYmC8yE3u9XpGBlj5uHVv5UsZ7jfQ5OjckVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- Inclure le header -->
<?php require 'Header.php'; ?>

<body">

    <main>

        <section class="L-I">
            <div class="Groupes-l-i">

                <!-- box illégal-->
                <div class="box" id="GOLD">
                    <a href="https://discord.com/invite/sFDHVgqzAn">
                        <img src="images/logo.png" alt="" class="box-img">
                    </a>
                    <h2 class="titre-BCSO">VIP GOLD<br>(1 mois)</h2>
                </div>

                <!-- box légal -->
                <div class="box" id="Diamond">
                    <a href="https://discord.gg/lspdmdt">
                        <img src="images/logo.png" alt="" class="box-img">
                    </a>
                    <h2 class="titre-LSPD">VIP Diamond<br>(1 mois)</h2>
                </div>

            </div>

        </section>

        <?php require_once "Haut.php"; ?>
    </main>

    <?php require_once "Footer.php"; ?>

    </body>



</html>