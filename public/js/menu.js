   
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
  
  function addToCart(id) {
    let quantity = $("input.quantity-input-" + id).val();
    $.ajax({
        type: "POST",
        url: "/addToCart",
        data: {
            productId: id,
            quantity: quantity
        },
        success: function (data) {
            alert(data.message);
            $('span.cart-badge').html(data.cartCount);
        },
        error: function (error) {
            alert ("something went wrong");
        }
    });
    // add code here to add the selected item and quantity to the shopping cart
  }
