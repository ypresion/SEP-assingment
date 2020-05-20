
<!-- Basket -->
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

              $items = count($_SESSION['basket']);

              //render items in the basket from the session data
              if(isset($_SESSION['basket'])){
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
            <button class=" mx-2 bg-gray-800 hover:bg-gray-500 text-white font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">
                <a href="payment.html">Checkout Securely</a>
              </button>
    </section>
</div>
<script>
  $(document).ready(function(){
    $('div.ui-input-text').each(function() {
              $(this).contents().unwrap();
      });
  });

  $(document).on("pageshow", function(e){
    e.preventDefault();
      let total = 0;
      $(".price").each(function(){
        total += parseFloat($( this ).val());
      });
      $("#total").text("£" + total);
  });

</script>

