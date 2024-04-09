//cart 
let carIcon = document.querySelector('#cart-icon')
let cart = document.querySelector('.cart')
let closeCart = document.querySelector('#close-cart')

//open cart
carIcon.onclick = () => {
    cart.classList.add('active')
};  

//Close cart
closeCart.onclick = () => {
    cart.classList.remove('active');
};

// Cart Working Js
if (document.readyState = 'loading'){
    document.addEventListener('DOMcontentLoaded', ready)
} else{
    ready();
}

//------------------------------------------------------------
//making function 
function ready(){
    //remove Itemes From Cart
    var removeCartButtons = document.getElementsByClassName('cart-remove')
    console.log(removeCatButtons)
    for(var i = 0; i < removeCartButtons.length; i++){
        var button = removeCartButtons[i]
        button.addEventListener('click', removeCartItem)
    }
    //Quantity Changes
    var quantityInputs = document.getElementsByClassName('cart-quantity')
    for (var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i]
        input.addEventListener("change", quantityChanged);
    }
}

//remove Itemes From Cart
function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.remove()
    updatetotal();
}

//quantity Changes
function quantityChanged(event){
    var input = event.target
    if (isNaN(input.value) || input.value <= 0){
        input.value= 1
    }
    updatetotal()
}

//------------------------------------------------------------

// update
function updatetotal(){
    var cartContent = document.getElementsByClassName('cart-content')[0]
    var cartBoxes = cartContent.getElementsByClassName('cart-box')[0]
    var total = 0
    for(var i = 0; i < cartBoxes.length; i++){
        var priceElement = cartbox.getElementsByClassName('cart-price')[0]
        var quantityElement = cartbox.getElementsByClassName('cart-quantity')[0]
        var price = parseFloat(priceElement.innerText.replace("$",""))
        var quantity = quantityElement.value;
        total = total + (price * quantity);

        document.getElementsByClassName('total-price')[0].innerText = '$' + total;
    }
}