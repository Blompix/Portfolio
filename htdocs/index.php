<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>


  <!-- Icon -->
  <link rel="shortcut icon" href="images/logo.png" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/index.css">

  <!-- FONTS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XW4pxKjJ4l4lsLYIvU8W6Hj9XU1B6E/4v0opWZ+tPjKGO4V4YfrYmC8yE3u9XpGBlj5uHVv5UsZ7jfQ5OjckVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Ajout du script JavaScript pour gérer le clic -->

</head>

<body>
  <!-- Inclure le header -->
  <?php require "header.php"; ?>


  <!-- image de debut -->
  <div class="hero-section">
    <div class="container">
      <p>Explorez la ville, créez votre propre histoire et participez à des aventures palpitantes!</p>
      <a href="https://cfx.re/join/5eoypa" class="btn">Rejoindre le serveur dès maintenant</a>
    </div>
  </div>


  <!-- Premierre Années -->
  <section class="shop container">
    <h2 class="Section-title"><a>Première Année</a></h2>

    < <!-- Content -->
      <div class="shop-content">
        <!-- Bijoux -->
        <div class='wrapper'>

          <div class='product-box'>
            <img src='images/bijoux.jpg' alt='' class='product-img' />
            <img src='images/transitions/ferrari330 p4.jpg' alt='' class='product-img' />
            <h2 class='product-title'>Bijoux</h2>
            <span class='price'>Site e-commerce fait pendant la première année en cours</span>
            <div class='btn_favorie'>
              <a href="projets/Bijoux/site/Bijoux.php"><button type='submit' class='button-87' role='button'>en savoir plus</button></a>
            </div>
          </div>

          <!-- ASJ auto école -->
          <div class='product-box'>
            <img src='images/ASJ.jpg' alt='' class='product-img' />
            <img src='images/transitions/ASJ.jpg' alt='' class='product-img' />
            <h2 class='product-title'>ASJ auto école</h2>
            <span class='price'>Site réalisé pour une auto-école fictive avec fonctionnalités de réservation et de gestion des cours</span>
            <div class='btn_favorie'>
              <a href="projets/ASJ/agence.php"><button type='submit' class='button-87' role='button'>en savoir plus</button></a>
            </div>
          </div>


        </div>


      </div>


  </section>


  <!-- Deuxième Années -->
  <section class="shop container">
    <h2 class="Section-title"><a>Deuxième Année</a></h2>

    <!-- Contenu -->
    <div class="shop-content">
      <div class='wrapper'>

        <!-- MerryLife -->
        <div class='product-box'>
          <img src='images/merrylife.jpg' alt='' class='product-img' />
          <img src='images/transitions/ferrari330 p4.jpg' alt='' class='product-img' />
          <h2 class='product-title'>Merrylife</h2>
          <span class='price'>Site fait pour le plaisir pour un serveur de GTA RP qui n'existe plus</span>
          <div class='btn_favorie'>
            <button type='submit' class='button-product' role='button'>En savoir plus</button>
          </div>
        </div>
        <!-- comming soond -->
        <div class='product-box'>
          <img src='images/voitures/ferrari330 p4.jpg' alt='' class='product-img' />
          <img src='images/transitions/ferrari330 p4.jpg' alt='' class='product-img' />
          <h2 class='product-title'>comming soond</h2>
          <span class='price'>Projet à venir, restez à l'écoute pour plus de détails</span>
          <div class='btn_favorie'>
            <button type='submit' class='button-87' role='button'>Acheter</button>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Mes competence -->
  
  <section id="instructeur">
    <section class="groupe">
      <i class="Section-Gtitre">Mec competance</i>
    </section>
    <div class="container1">
      <div class="moniteur-list">
        <div class="Fonda">
          <img src="images/html.png" alt="Instructeur 1">
          <h3>HTML</h3>
          <p>2 ans d'expérience </p>
        </div>

        <div class="Fonda">
          <img src="images/css.png" alt="Instructeur 2">
          <h3>CSS</h3>
          <p>2 ans d'expérience </p>
        </div>

        <div class="Fonda">
          <img src="images/php.png" alt="Instructeur 2">
          <h3>PHP</h3>
          <p>1 an d'expérience </p>
        </div>

        <div class="Fonda">
          <img src="images/js.png" alt="Instructeur 2">
          <h3>JavaScript</h3>
          <p>1 an d'expérience </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Inclure le footer -->
  <?php require_once "Footer.php"; ?>
</body>

</html>