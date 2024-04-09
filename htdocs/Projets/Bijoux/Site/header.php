<!doctype html>
<html lang="Fr">

<head>
    <title>Header professionnel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/header.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <link rel="stylesheet" href="js/header.js">
    <script src="https://kit.fontawesome.com/179d71bfc0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <header>
        <!-- Le logo du header  -->
        <div class="logo">
            <a href="Accueil.php"><img src="images/logo/1.png" alt="Logo de la boutique de bijoux"></a>
        </div>

        <!-- Les menu du header  -->
        <nav id="barre">
            <ul>
                <li><a href="Accueil.php">Accueil</a></li>
                <li><a href="Bijoux.php">Bijoux</a></li>
            </ul>
        </nav>

        <!-- la barre de recherche du header  -->
        <div class="search-box">
            <form>
                <input type="text" id="text_header" placeholder="Recherche...">
            </form>
        </div>

        <div class="icons">
            <a href="Panier.php"><i class="fas fa-shopping-cart"></i></a>
            <?php
            if (isset($_SESSION['ID_CLIENT'])) {
                // Si l'utilisateur est connecté, ajoutez un style directement à l'icône pour la couleur verte
                echo '<a href="inscription.php"><i class="fas fa-user" style="color: green;"></i></a>';
                
                
                // Récupérez le nom de l'utilisateur depuis la base de données en utilisant l'ID_CLIENT
                $userID = $_SESSION['ID_CLIENT'];
                $sql = "SELECT Nom FROM client WHERE ID_CLIENT = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $userID);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($userName);
                    $stmt->fetch();
                    echo '<span>' . $userName . '</span>';
                    
                    
                }
                $stmt->close();

                echo '<a href="leave.php"><i class="fas fa-sign-out-alt"></i></a>';
            } else {
                // Si l'utilisateur n'est pas connecté, ajoutez un style directement à l'icône pour la couleur rouge
                echo '<a href="inscription.php"><i class="fas fa-user" style="color: red;"></i></a>';
            }
            ?>
            <a href="/Portfolio/htdocs/Projet.php"><i class="fa-solid fa-reply"></i></a>
        </div>

        <script src="js/header.js"></script>
    </header>
</body>

</html>
