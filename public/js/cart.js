function increaseNumber() {
    let quantityInput = document.getElementById("quantity-input");
    quantityInput.value = parseInt(quantityInput.value) + 1;
  }
  
  function decreaseNumber() {
    let quantityInput = document.getElementById("quantity-input");
    if (quantityInput.value > 1) {
      quantityInput.value = parseInt(quantityInput.value) - 1;
    }
  }
  
  function addToCart() {
    let quantityInput = document.getElementById("quantity-input");
    let quantity = parseInt(quantityInput.value);
    // add code here to add the selected item and quantity to the shopping cart
  }