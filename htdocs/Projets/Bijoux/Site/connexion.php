<?php
require_once "base.php";

session_start(); // Initialise la session

if (isset($_POST['login'])) {
    if (!empty($_POST['emailOrName']) && !empty($_POST['password'])) {
        $emailOrName = htmlspecialchars(trim($_POST['emailOrName']));
        $password = $_POST['password']; // Mot de passe non haché

        // Requête SQL pour récupérer le mot de passe haché et le sel associés à l'email ou au nom
        $recupUser = $conn->prepare("SELECT ID_CLIENT, MDP, Salt FROM client WHERE Mail = ? OR Nom = ?");
        $recupUser->bind_param("ss", $emailOrName, $emailOrName);
        $recupUser->execute();
        $recupUser->store_result();

        if ($recupUser->num_rows > 0) {
            $recupUser->bind_result($userID, $hashedPassword, $salt);
            $recupUser->fetch();

            // Vérifiez le mot de passe en utilisant le sel
            if (password_verify($password . $salt, $hashedPassword)) {
                // Le mot de passe est correct
                $_SESSION['ID_CLIENT'] = $userID; // Stockez l'ID du client
                $_SESSION['Mail'] = $emailOrName; // Stockez l'email ou le nom de l'utilisateur

                // Affichez un message de confirmation et redirigez après 3 secondes
                echo "<p>Connexion réussie. Redirection vers la page d'accueil en cours...</p>";
                echo "<script>setTimeout(function(){window.location.href='Accueil.php'}, 3000);</script>";
                exit();
            } else {
                echo "Votre nom d'utilisateur ou mot de passe est incorrect";
            }
        } else {
            echo "Aucun utilisateur trouvé avec cet email ou ce nom";
        }

        $recupUser->close();
    } else {
        echo "Veuillez compléter tous les champs...";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion - Mon site</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>
    <?php require_once "header.php"; ?>

    <form id="msform" method="post">
        <fieldset>
            <h2 class="fs-title">Connexion à votre compte</h2>

            <div class="form-row">
                <input type="text" class="beau" name="emailOrName" placeholder="Email ou Nom" autocomplete="off" />
            </div>

            <div class="form-row">
                <input type="password" class="beau" name="password" placeholder="Mot de passe" autocomplete="off" />
            </div>

            <div class="form-row">
                <input type="submit" name="login" value="Se connecter" class="button-87" />
                <a href='inscription.php'><button type='button' class='button-87' role='button'>S'inscrire</button></a>
            </div>
        </fieldset>
    </form>
</body>
</html>
