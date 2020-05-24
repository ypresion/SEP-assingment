  //Get rid of Jquery Mobile wrappers
  $(document).ready(function(){
    $('div.ui-input-text').each(function() {
              $(this).contents().unwrap();
      });

  // Append div for each unit from the basket to order summary
  for(let i=0; i<$(".item").length; i++) {
    let num = parseInt(i+1);
    $("#item-list").append('<div class="text-gray-800 flex flex-row justify-between px-2 mb-4"><p>Item '+ num +'</p><p class="item-price"></p></div>');    
  }
  //Calculate price for the units in the basket depending on their quantity
  calculatePrice();
  $(".qty").change(calculatePrice);
  });

  //Calculate total price for every item and the total to pay
  function calculatePrice() {
    let total = 0;
    for(let i=0; i<$(".item").length; i++){
      let price = $(".item").eq(i).find("input.price").val();
      let qty = $(".item").eq(i).find("input.qty").val();
      total += price*qty;
      $(".item-price").eq(i).text("£" + price*qty);
    }
    $("#total").text("£" + total);
  }

//Script provided by PayPay for managing transaction 
paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: $("#total").text().substr(1),
          }
        }]
      });
    },
    //If transaction approved, clear session variable and redirect to main page
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        document.getElementById("tSuccess").classList.remove("hidden");
        document.getElementById("paypal-button-container").classList.add("hidden");
        window.location.href = "../src/controllers/clearCart.php";
      });
    }
  }).render('#paypal-button-container'); // Display payment options
