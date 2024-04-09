<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Paiement</title>
    <link rel="stylesheet" href="css/payer.css">
    <link rel="stylesheet" href="js/payer.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/card/2.5.0/card.min.js"></script>

</head>


<?php
    require_once "header.php"
?>

<body>
    <div class="container">
        <h1>Paiement</h1>
        <div class="card-container"></div>
        <form action="process_payment.php" method="post" onsubmit="return validateForm()">
            <label for="card_number">Numéro de carte :</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="expiry_date">Date d'expiration :</label>
            <input type="text" id="expiry_date" name="expiry_date" required>

            <label for="cvv">CVV :</label>
            <input type="text" id="cvv" name="cvv" required>

            <button type="submit">Payer</button>
        </form>
    </div>
</body>
</html>
