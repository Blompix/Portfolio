<?php
require_once "base.php";

if (isset($_POST['next'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['num']) && !empty($_POST['code_postal']) && !empty($_POST['address']) && !empty($_POST['ville']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $Nom = htmlspecialchars($_POST['nom']);
        $Prenom = htmlspecialchars($_POST['prenom']);
        $N_tel = htmlspecialchars($_POST['num']);
        $Code_Postal = htmlspecialchars($_POST['code_postal']);
        $Adresse = htmlspecialchars($_POST['address']);
        $Ville = htmlspecialchars($_POST['ville']);
        $Mail = htmlspecialchars($_POST['email']);
        $Password = $_POST['password']; // Mot de passe non haché

        // Générer un sel aléatoire
        $salt = bin2hex(random_bytes(16));

        // Créer un mot de passe haché en utilisant le sel
        $hashedPassword = password_hash($Password . $salt, PASSWORD_BCRYPT);

        // Requête d'insertion avec le mot de passe haché et le sel
        $submit = $conn->prepare("INSERT INTO client (Nom, Prenom, N_tel, Code_Postal, Adresse, Ville, Mail, MDP, Salt) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $submit->bind_param("sssssssss", $Nom, $Prenom, $N_tel, $Code_Postal, $Adresse, $Ville, $Mail, $hashedPassword, $salt);

        // Exécution de la requête
        if ($submit->execute()) {
            echo "Inscription validée avec succès. Redirection vers la page de connexion en cours...";
            // Ajouter un code JavaScript pour rediriger après 5 secondes
            echo "<script>setTimeout(function(){window.location.href='connexion.php'}, 5000);</script>";
        } else {
            die("Erreur SQL : " . $conn->error);
        }

        // Fermer la requête préparée
        $submit->close();
    } else {
        echo 'Veuillez remplir tous les champs pour valider';
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Inscription - Mon site</title>
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="js/inscription.js">
</head>

<body>
    <?php
    require_once "header.php";
    ?>

    <form id="msform" method="post">
        <fieldset>
            <h2 class="fs-title">Créez votre compte</h2>

			
            <div class="form-row">
                <input type="text" class="beau" name="nom" placeholder="Nom" autocomplete="off" />
                <input type="text" class="beau" name="prenom" placeholder="Prénom" autocomplete="off" />
            </div>

            <div class="form-row">
                <input type="text" class="beau" name="num" placeholder="Téléphone" autocomplete="off" />
                <input type="text" class="beau" name="code_postal" placeholder="Code Postal" autocomplete="off" />
                <input name="address" class="beau" placeholder="Adresse" autocomplete="off"></input>
                <input name="ville" class="beau" placeholder="Ville" autocomplete="off"></input>
            </div>

            <div class="form-row">
                <input type="text" class="beau" name="email" placeholder="Email" autocomplete="off"/>
            </div>
            <div class="form-row">
                <input type="password" class="beau" name="password" placeholder="Mot de passe" autocomplete="off" />
                <input type="password" class="beau" name="cpass" placeholder="Confirmez le mot de passe" autocomplete="off"/>
            </div>

            <div class="form-row">
                <input type="submit" name="next" value="S'inscrire" class="button-87" />
                <a href='connexion.php'><button type='button' class='button-87' role='button'>Connexion</button></a>
            </div>
        </fieldset>
    </form>
</body>
</html>
