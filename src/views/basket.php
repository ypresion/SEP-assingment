<?php
require_once("../src/controllers/functions.php");
?>

<!-- Basket -->
<section class="flex flex-col md:flex-row">
        <table class="table-auto w-full text-center md:w-3/4">
            <thead class="text-sm mb-4">
              <tr>
                <th class="px-4 py-2 md:w-32"></th>
                <th class="px-4 py-2">Details</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Total</th>
              </tr>
            </thead>
            <tbody class="text-xs md:text-lg">
              <tr class=" ">
                <td class="md:w-32"><img src="assets/images/mx-master-3.png" alt=""></td>
                <td class="">Logitech Mx-Mouse</td>
                <td class="">1</td>
                <td class="">£35.99</td>
                <td class="">£35.99</td>
              </tr>
              <tr class=" ">
                <td class="md:w-32"><img src="assets/images/mx-master-3.png" alt=""></td>
                <td class="">Logitech Mx-Mouse</td>
                <td class="">1</td>
                <td class="">£35.99</td>
                <td class="">£35.99</td>
              </tr>
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
                <p>£89.99</p>
            </div>
            <button class=" mx-2 bg-gray-800 hover:bg-gray-500 text-white font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">
                <a href="payment.html">Checkout Securely</a>
              </button>
    </section>

</div>
