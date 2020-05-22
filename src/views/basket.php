
<!-- Basket -->
<script src="https://www.paypal.com/sdk/js?client-id=Ae85_FL5wvvK6S0rvYDyhqPotl3urBCMJTuX7GWpxyur0QaPtzXLef7Dc_a_i3MAUoI-pHWGHK7yHyCB&merchant-id=5BKGV2D7DTYXU&currency=GBP"></script> 
<section class="flex flex-col md:flex-row">
        <table class="table-auto w-full text-center md:w-3/4">
            <thead class="text-sm mb-4">
              <tr>
                <th class="px-4 py-2 md:w-32"></th>
                <th class="px-4 py-2">Details</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Remove</th>
              </tr>
            </thead>
            <tbody class="text-xs md:text-lg">
              <?php 
              require_once("../src/controllers/functions.php");

              $dbConn = getConnection();

              
              $total = 0.00;
              //render items in the basket from the session data
              if(isset($_SESSION['basket'])){
                
                $items = count($_SESSION['basket']);
  
              for($i=0; $i<$items; $i++) {
                $prodID = $_SESSION['basket'][$i];

                $sql =  "select * FROM a_product
                WHERE prodID = '$prodID' ";

                $q1 = $dbConn->query($sql);

                if ($q1 === false) {
                echo "<p>Query 1 failed: " . $dbConn->error . "</p>\n</body>\n</html>";
                exit;
                } 

                while ($rowObj = $q1->fetchObject()) {
                  $total += $rowObj->prodPrice;
                echo <<<EOT
                <tr id="prod{$prodID}" class="">
                  <td class="md:w-32"><img src="assets/ProductPics/{$rowObj->prodImage}" alt=""></td>
                  <td class="">{$rowObj->prodName}</td>
                  <td class=""><input class="qty w-8" type="number" min="1" max="10" value="1" required></td>
                  <td class="">£<input type="text" class="w-12 price appearance-none bg-transparent" value={$rowObj->prodPrice} disabled></td>
                  <td class="">
                  <a href="../src/controllers/deleteFromCart.php?remove={$prodID}" data-ajax="false" rel="external"><svg class="remove fill-current h-6 w-6 text-red-500 m-auto" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg></a>
                  </td>
                </tr>
EOT;
                }
              }
            }
              ?>

            </tbody>
          </table>

          <div class="flex flex-col w-full  md:w-1/4 mt-2">
            <span class="px-2 mb-2">Order Summary</span>
            <div class="flex flex-row justify-between px-2 mb-4">
                <p>1 Item</p>
                <p>£89.99</p>
            </div>
            <div class="flex flex-row justify-between px-2 mb-2">
                <p>Total</p>
                <p id="total"></p>
            </div>
            <div id="paypal-button-container"></div>
    </section>  

<!--Modal-->
<div id="tSuccess" class="hidden modal pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-75"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

      <div class="modal-content py-4 text-left px-6 z-50">
          
          <!--Body-->
          <svg class="m-auto svg-icon" fill="#2d3748" viewBox="0 0 20 20" width="200" height="200">
             <path d="M9.917,0.875c-5.086,0-9.208,4.123-9.208,9.208c0,5.086,4.123,9.208,9.208,9.208s9.208-4.122,9.208-9.208
								C19.125,4.998,15.003,0.875,9.917,0.875z M9.917,18.141c-4.451,0-8.058-3.607-8.058-8.058s3.607-8.057,8.058-8.057
								c4.449,0,8.057,3.607,8.057,8.057S14.366,18.141,9.917,18.141z M13.851,6.794l-5.373,5.372L5.984,9.672
								c-0.219-0.219-0.575-0.219-0.795,0c-0.219,0.22-0.219,0.575,0,0.794l2.823,2.823c0.02,0.028,0.031,0.059,0.055,0.083
								c0.113,0.113,0.263,0.166,0.411,0.162c0.148,0.004,0.298-0.049,0.411-0.162c0.024-0.024,0.036-0.055,0.055-0.083l5.701-5.7
                                c0.219-0.219,0.219-0.575,0-0.794C14.425,6.575,14.069,6.575,13.851,6.794z"></path>            
        </svg>
            
        <!--Title-->
            <div class="flex justify-between items-center pb-3">
              <p class="text-gray-800 m-auto text-2xl font-bold">Transaction Successful!</p>
            </div>

        <!--Footer-->
        <div class="flex justify-between items-center pb-3">
              <p class="text-gray-800 m-auto text-2xl">You'll be redirected soon...</p>
        </div>
        
      </div>
    </div>
  </div>




<script>
  $(document).ready(function(){
    $('div.ui-input-text').each(function() {
              $(this).contents().unwrap();
      });
  });

  setInterval(function() {
      let total = 0;
      $(".price").each(function(){
        total += parseFloat($( this ).val());
      });
      $("#total").text("£" + total);
  }, 1000);
  
</script>

<script>

paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: <?php echo $total ?>,
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        document.getElementById("tSuccess").classList.remove("hidden");
        document.getElementById("paypal-button-container").classList.add("hidden");
        window.location.href = "../src/controllers/clearCart.php";
      });
    }
  }).render('#paypal-button-container'); // Display payment options on your web page

</script>
</div>

