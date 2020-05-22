<?php

require_once("../src/controllers/functions.php");
$dbConn = getConnection();
$sql =  "select * FROM a_product  
       INNER JOIN a_prodCat
       ON a_prodCat.catID = a_product.catID
       ORDER BY ProdStock DESC 
       LIMIT 3";
$queryResult = $dbConn->query($sql);
if($queryResult === false) {
    echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
    exit;
}

$errors = isset($_REQUEST['errors']) ? $_REQUEST['errors'] : null;
if($errors == 'true') { 
    sleep(1);
    echo <<<EOT
    <script>
    $(document).ready(function(){
    $('#phperror').removeClass("hidden");
    setTimeout(function(){ $('#phperror').addClass("hidden"); }, 10000);
    });
    </script>
EOT;
}
?> 


<!-- Hero Section -->
    <div class="carousel relative container mx-auto" style="max-width:2560px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;" data-transition="slide">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('assets/images/d5.jpg');">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-2xl font-bold my-4">Best Selling Monitor</p>
                            <a class=" text-white text-xl inline-block no-underline border-2 p-2 uppercase border-gray-600 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="index.php?page=productview&prodID=4">view product</a>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
  
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;" data-transition="slide">
              <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('assets/images/d4.jpg');">
                    <div class="container mx-auto">
                      <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-white text-2xl font-bold my-4">Best Selling Laptop</p>
                        <a class=" text-white text-xl inline-block no-underline border-2 p-2 uppercase border-gray-600 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="index.php?page=productview&prodID=1">view product</a>
                    </div>
                    </div>
  
                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
  
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;" data-transition="slide">
              <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('assets/images/d1.png');">
                    <div class="container mx-auto">
                      <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                        <p class="text-white text-2xl font-bold my-4">Best Selling Accessory</p>
                        <a class=" text-white text-xl inline-block no-underline border-2 p-2 uppercase border-gray-600 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="index.php?page=productview&prodID=2">view product</a>
                    </div>
                    </div>
  
                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
  
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>
  
        </div>
    </div>
    <!-- End of Hero -->

      <!-- Categories Section -->
      <div class="flex flex-col lg:flex-row  mt-2">
        <div class="w-full lg:w-1/3 h-auto p-2  md:text-xl ">
          <button class="w-full p-2 bg-gray-800 hover:bg-gray-900 text-white font-semibold hover:text-white  border border-gray-400 hover:border-transparent rounded">
            <a href="#">SHOP ACCESSORIES</a>
          </button>
        </div>
        <div class="w-full lg:w-1/3 h-auto p-2  md:text-xl ">
          <button class="w-full p-2 bg-gray-800 hover:bg-gray-900 text-white font-semibold hover:text-white  border border-gray-400 hover:border-transparent rounded">
            <a href="#">SHOP GAMES</a>
          </button>
        </div>
        <div class="w-full lg:w-1/3 h-auto p-2  md:text-xl ">
          <button class="w-full p-2 bg-gray-800 hover:bg-gray-9I00 text-white font-semibold hover:text-white  border border-gray-400 hover:border-transparent rounded">
            <a href="#">SHOP CONTROLLERS</a>
          </button>
        </div>

      </div>
      <!-- Hot Selling Products -->
      <div class="relative pt-1 hidden md:block">
        <div class="overflow-hidden h-2 my-2 text-xs flex rounded bg-gray-400">
        </div>
      </div>
      <!-- limit to 3 query searches-->
      <div class="flex flex-wrap justify-center ">

      <?php

while($rowObj = $queryResult->fetchObject()) {
    echo "<div class=\"flex flex-col my-2 p-2 h-auto max-w-sm md:w-1/2 md:max-w-md lg:w-1/3 lg:max-w-lg  xl:max-w-xl  \">
        <div class=\"flex flex-col md:items-center max-w-full hover:border-gray-600 border-2 p-6 hover:bg-gray-700 \">
            <div class=\"h-auto overflow-hidden \">
                <a href='index.php?page=productview&prodID={$rowObj->prodID}'><img src=\"assets/ProductPics/$rowObj->prodImage\" alt=\"\"></a>
            </div>
        </div>
        <div class=\"flex pl-5 \">
          <div class=\"flex flex-col \">
              <a href='productview.php?prodID={$rowObj->prodID}'>
                  <span class=\"font-bold text-xl\" >
                        {$rowObj->prodName}
                    </span>
                </a>
                    <span>
                   £{$rowObj->prodPrice}
                    </span>
                    <span id = \"cat\">
                   {$rowObj->catDesc}
                    </span>
                </div>
         </div>
</div>";

}


?>
    <!-- Reviews Section -->
    <section class="text-white">
      <div class=" px-1 py-2 mx-auto">
        <h1 class="text-3xl font-medium title-font text-gray-900 mb-4 text-center">Customer Reviews</h1>
        <div class="flex flex-wrap ">
          <div class="p-2 md:w-1/2 w-full">
            <div class="h-full  bg-gray-800 border p-6 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="leading-relaxed mb-6">Hands down the best shopping experience i've ever had. Regular customer now!!!</p>
              <a class="inline-flex items-center">
                <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-white">Jane Doe</span>
                  <span class="text-gray-500 text-sm">Birmingham, UK</span>
                </span>
              </a>
            </div>
          </div>
          <div class="p-2 md:w-1/2 w-full">
            <div class="h-full  bg-gray-800 border p-6 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="leading-relaxed mb-6">Hands down the best shopping experience i've ever had. Regular customer now!!!</p>
              <a class="inline-flex items-center">
                <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-white">John Doe</span>
                  <span class="text-gray-500 text-sm">Newcastle
                    , UK</span>
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Of Reviews -->
        <!-- Newsletter Subscription -->
        <section class="text-gray-700 body-font">
    <form id="newsletterForm" method="post" action="../src/controllers/registerNewsletter.php" data-ajax="false">
    <div class=" px-3 py-2 mx-auto">
        <div class="flex flex-col text-center w-full mb-6">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Our Newsletter</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Be the first to get our latest offers and many more deals!</p>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-4 sm:px-0">
            <input class="to-validate flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-gray-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Full Name" type="fn" name="fn">
            <input class="to-validate flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-gray-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Email" type="email" name = "email">
            <button class="text-white bg-gray-800 border-0 py-2 px-10 focus:outline-none hover:bg-gray-600 rounded text-lg" type="submit">Subscribe</button>
            
          </div>
          <p class="warning text-xs italic text-red-500 hidden">Please enter your details.</p>
          <p id="phperror" class="text-xs italic text-red-500 hidden">Email already in the database.</p>
    </div>
    </form>
</section>
    <!-- End of Newsletter -->

    <!-- App Showcase Section -->
    <section class="text-gray-700 body-font">
        <div class=" px-5 py-8 mx-auto flex items-center md:flex-row flex-col">
          <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
            <h2 class="text-xs text-gray-500 tracking-widest font-medium title-font mb-1">Our App</h2>
            <h1 class="md:text-2xl text-xl font-medium title-font text-gray-900">Download Our Amazing App</h1>
          </div>
          <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0">
            <button class="bg-gray-200 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-300 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
                <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
              </svg>
              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="text-xs text-gray-600 mb-1">GET IT ON THE</span>
                <span class="title-font font-medium">Google Play</span>
              </span>
            </button>
            <button class="bg-gray-200 inline-flex py-3 px-5 rounded-lg items-center ml-4 hover:bg-gray-300 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
                <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
                <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path>
              </svg>
              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="text-xs text-gray-600 mb-1">Download on the</span>
                <span class="title-font font-medium">App Store</span>
              </span>
            </button>
          </div>
        </div>
      </section>
      </div>
      <script>
        //get rid of jquery wrappers
        $(document).on("pageshow", function(){
          $('div.ui-radio').each(function() {
              $(this).contents().unwrap();
          });
          $('div.ui-input-text').each(function() {
              $(this).contents().unwrap();
          });
          $('div.ui-checkbox').each(function() {
              $(this).contents().unwrap();
          });
        }); 
      </script>
