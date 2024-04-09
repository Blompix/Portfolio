<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
    <?php
    require_once "header.php";
    ?>

  <main>
    <div class="titre">
        <h1>Contactez-nous</h1>
    </div>
            
    <form>
      <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <button type="submit">Envoyer</button>
    </form>
  </main>
  <script src="js/theme-toggle.js"></script>
</body>

<?php
    require_once "footer.php";
?>

</html>
