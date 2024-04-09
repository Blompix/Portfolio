<!DOCTYPE html>
<html lang="en">

    <?php
    $conn = mysqli_connect("localhost", "root", "", "bijoux", 3308);
    $conn->set_charset("utf8");
    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fichiers CSS -->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="css/homeanimation.css">
        <!-- lier le Js pour le defilement -->
        <script src="js/home.js"></script>

        <title>Document</title>
    </head>

    <body>
        <main>
            <h1>Produit Du Moments </h1>
            <!-- Section de défilement -->
            <div class="diapo" data-speed="5000" data-transition="2000">
                <?php
                $sql = "select * from bijou";
                $result = mysqli_query($conn, $sql);
                echo "<div class='elements'>";
                while ($myrow = $result->fetch_array()) {
                    echo "<div class='element'>";
                    echo "<a href='produit.PHP'>
                    <img src = 'images/produit/" . $myrow["ID_BIJOUX"]
                        . ".jpg' alt='' class='product-img'/>
                    <img src = 'images/transitions/" . $myrow["ID_BIJOUX"]
                        . ".jpg' alt='' class='product-img'/>";
                    echo "<h2 class='product-title'>";
                    echo $myrow["nom"];
                    echo "</h2>";
                    /* -- Les etoiles -- */
                    echo "<div class='etoile'>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                    echo "</div>";
                    echo "<span class='price'>";
                    echo $myrow["prix"];
                    echo "€</span>";
                    /* -- Boutton Favorie -- */
                    echo "<div class='btn_favorie'>";
                    echo "<a href='payer.PHP'><button type='button' class='button-87' role='button'>Acheter</button></a>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                ?>
                <!-- Flèches -->
                <i id="nav-gauche" class="las la-chevron-left"></i>
                <i id="nav-droite" class="las la-chevron-right"></i>
            </div>
            
        </main>
    </body>

</html>

