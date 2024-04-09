<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projets</title>


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
  <?php require 'header.php'; ?>


    <!-- image de debut -->
    <div class="hero-section">
    <div class="container">
      <p> ........</p>
    </div>
  </div>



  <!-- Premierre Années -->
  <section class="shop container">
    <h2 class="Section-title"><a>Premier Années</a></h2>

    <!-- Content -->
    <div class="shop-content">
      <!-- Merrylife -->
      <div class='wrapper'>

        <div class='product-box'>
          <a href="projets/Bijoux/site/Bijoux.php">
            <img src='images/bijoux.jpg' alt='' class='product-img' />
            <img src='images/transitions/bijoux.png' alt='' class='product-img' />
          </a>
          <h2 class='product-title'>Bijoux</h2>
          <span class='price'>Site e-commerce fait pendant la première année en cours</span>
          <div class='btn_favorie'>
          <a href="projets/Bijoux/site/Bijoux.php"><button type='submit' class='button-87' role='button'>en savoir plus</button></a>
          </div>
        </div>


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

  <!-- Premierre Années -->
  <section class="shop container">
    <h2 class="Section-title"><a>deuxieme Années</a></h2>

    <!-- Content -->

    <div class="shop-content">
      <!-- Merrylife -->
      <div class='wrapper'>

        <!-- Merrylife -->
        <div class='product-box'>
          <img src='images/merrylife.jpg' alt='' class='product-img' />
          <img src='images/transitions/merrylife.png' alt='' class='product-img' />
          <h2 class='product-title'>Merrylife</h2>
          <span class='price'>Site fait pour le plaisir pour un serveur de GTA RP qui n'existe plus</span>
          <div class='btn_favorie'>
          <a href="projets/Merrylife/index.php"><button type='submit' class='button-87' role='button'>en savoir plus</button></a>
          </div>
        </div>

      </div>
    </div>

  </section>

  
  <!-- Inclure le footer -->
  <?php require_once "Footer.php"; ?>
  <!-- script -->
  <script src="js/script.js"></script>
</body>

</html>