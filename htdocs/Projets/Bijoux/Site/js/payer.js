function showAlert() {
    alert("Paiement effectué avec succès !");
}

function validateForm() {
    var cardNumber = document.getElementById("card_number").value;
    var expiryDate = document.getElementById("expiry_date").value;
    var cvv = document.getElementById("cvv").value;

    // Vérification des informations
    if (cardNumber === "" || expiryDate === "" || cvv === "") {
        alert("Veuillez remplir tous les champs !");
        return false;
    }

    // Valider le numéro de carte en utilisant Card.js
    var cardType = card.cardType(cardNumber);
    if (cardType === null) {
        alert("Numéro de carte invalide !");
        return false;
    }

    // Vérifier la longueur du numéro de carte en fonction du type de carte
    var cardLength = cardNumber.replace(/\s/g, "").length;
    if (
        (cardType === "visa" && cardLength !== 16) ||
        (cardType === "mastercard" && cardLength !== 16) ||
        (cardType === "amex" && cardLength !== 15)
    ) {
        alert("Numéro de carte invalide !");
        return false;
    }

    // Si toutes les informations sont valides
    showAlert();
    return true;
}

document.addEventListener("DOMContentLoaded", function() {
    var cardNumberInput = document.getElementById("card_number");
    var cardExpiryInput = document.getElementById("expiry_date");
    var cardCvvInput = document.getElementById("cvv");

    // Initialiser Card.js pour les champs de carte de crédit
    var card = new Card({
        form: 'form',
        container: '.card-container',
        formSelectors: {
            numberInput: '#card_number',
            expiryInput: '#expiry_date',
            cvcInput: '#cvv'
        },
        placeholders: {
            number: 'Numéro de carte',
            expiry: 'MM/AA',
            cvc: 'CVV'
        },
        masks: {
            cardNumber: '•'
        }
    });

    // Désactiver le bouton de paiement par défaut
    var paymentButton = document.querySelector("button[type=submit]");
    paymentButton.disabled = true;

    // Activer le bouton de paiement une fois que tous les champs sont remplis
    function checkFormValidity() {
        var isFormValid = cardNumberInput.value !== "" && cardExpiryInput.value !== "" && cardCvvInput.value !== "";
        paymentButton.disabled = !isFormValid;
    }

    cardNumberInput.addEventListener("input", checkFormValidity);
    cardExpiryInput.addEventListener("input", checkFormValidity);
    cardCvvInput.addEventListener("input", checkFormValidity);
});