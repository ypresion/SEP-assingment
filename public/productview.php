<?php
ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();
?>

<!DOCTYPE html> 
<html>
<head>
    <title>T Gaming - Shop Best Gaming Accessories Online!</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="build/tailwind.css">
    <link rel="stylesheet" href="styles/jquery.css">
    <link rel="stylesheet" href="styles/global.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<?php
include '../src/views/view.php';
require_once("../src/controllers/functions.php");

$dbConn = getConnection();

$prodID = isset($_REQUEST['prodID']) ? $_REQUEST['prodID'] : null;

$sql =  "select * FROM a_product
       INNER JOIN a_prodCat
      ON a_prodCat.catID = a_product.catID
       WHERE prodID = '$prodID' ";

$q1 = $dbConn->query($sql);


if($q1 === false) {
    echo "<p>Query 1 failed: ".$dbConn->error."</p>\n</body>\n</html>";
    exit;
}

$page = new Site();
$page->renderNav();

?>

    <!-- Breadcrumbs -->
    <div class="text-gray-700 font-medium mt-2 flex justify-center md:justify-start md:mx-4" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="#">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
            </li>
            <li class="flex items-center">
                <a href="#">All Products</a>
                <svg class="fill-current w-3 h-3 mx-3 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
            </li>
            <li>
                <a href="#" class=" hidden text-gray-500" aria-current="page">Third Level</a>
            </li>
        </ol>

    </div>
    <!-- end of breadcrumb -->
    <!-- Hot  Products -->


                <?php
                while ($rowObj = $q1->fetchObject())
                {
                    echo"
 <section class=\"text-gray-700 body-font overflow-hidden\">
        <div class=\" px-4 lg:px-0 py-4 mx-auto\">
            <div class=\"lg:w-4/5 mx-auto flex flex-wrap\">
                <div class=\"flex flex-col md:items-center max-w-full  lg:pt-10 md:ml-40 lg:ml-0\">
                    <div class=\"h-auto overflow-hidden \">
                       <a href='productview.php?prodID={$rowObj->prodID}'><img src=\"assets/ProductPics/$rowObj->prodImage\" alt=\" \"></a>
                    </div>
                </div>

                  
               
	           <div class=\"lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0\">
                    <h2 class=\"text-sm title-font text-gray-500 tracking-widest\">{$rowObj->catDesc}</h2>
                    <h1 class=\"text-gray-900 text-3xl title-font font-medium mb-1\">{$rowObj->prodName}</h1>
                    <div class=\"flex mb-4\">
              <span class=\"flex items-center\">
                <svg fill=\"bg-gray-400\" stroke=\"bg-gray-400\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-4 h-4 text-indigo-500\" viewBox=\"0 0 24 24\">
                  <path d=\"M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z\"></path>
                </svg>
                <svg fill=\"bg-gray-400\" stroke=\"bg-gray-400\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-4 h-4 text-indigo-500\" viewBox=\"0 0 24 24\">
                  <path d=\"M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z\"></path>
                </svg>
                <svg fill=\"bg-gray-400\" stroke=\"bg-gray-400\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-4 h-4 text-indigo-500\" viewBox=\"0 0 24 24\">
                  <path d=\"M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z\"></path>
                </svg>
                <svg fill=\"bg-gray-400\" stroke=\"bg-gray-400\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-4 h-4 text-indigo-500\" viewBox=\"0 0 24 24\">
                  <path d=\"M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z\"></path>
                </svg>
                <svg fill=\"bg-gray-400\" stroke=\"bg-gray-400\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-4 h-4 text-indigo-500\" viewBox=\"0 0 24 24\">
                  <path d=\"M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z\"></path>
                </svg>
                <span class=\"text-gray-600 ml-3\">4 Reviews</span>
              </span>
                        <span class=\"flex ml-3 pl-3 py-2 border-l-2 border-gray-200\">
                <a class=\"text-gray-500\">
                  <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">
                    <path d=\"M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z\"></path>
                  </svg>
                </a>
                <a class=\"ml-2 text-gray-500\">
                  <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">
                    <path d=\"M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z\"></path>
                  </svg>
                </a>
                <a class=\"ml-2 text-gray-500\">
                  <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">
                    <path d=\"M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z\"></path>
                  </svg>
                </a>
              </span>
                    </div>
                    <p class=\"leading-relaxed\">{$rowObj->prodDesc}</p>
                    <div class=\"flex mt-6 items-center pb-5 border-b-2 border-gray-300 mb-5\">
                        <div class=\"flex\">
                            <span class=\"mr-3\">Colour</span>
                            <button class=\"border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none\"></button>
                            <button class=\"border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none\"></button>
                            <button class=\"border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none\"></button>
                        </div>
                        <div class=\"flex ml-6 items-center\">
                            <span class=\"mr-3\">Connection</span>
                            <div class=\"relative\">
                                <select class=\"rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-indigo-500 text-base pl-3 pr-10\">
                                    <option>Wired</option>
                                    <option>Wireless</option>
                                </select>
                                <span class=\"absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center\">
                    <svg fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-4 h-4\" viewBox=\"0 0 24 24\">
                      <path d=\"M6 9l6 6 6-6\"></path>
                    </svg>
                  </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"flex\">
                        <span class=\"title-font font-medium text-2xl text-gray-900\">£{$rowObj->prodPrice}</span>
                    <button class=\"flex ml-auto text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded\">ADD TO CART</button>
                        <button class=\"rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4\">
                            <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">
                                <path d=\"M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z\"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
 ";
                }
                ?>



    <!-- End of product -->
    <!-- Recommender System -->
    <section class="text-gray-700 body-font">
        <div class=" px-5 py-2 mx-auto">
            <div class="flex flex-col text-center w-full ">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Products you'll love</h1>
            </div>
            <div class="flex flex-wrap ">
                <div class="md:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="assets/images/mx-master-3.png">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Product Name</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">UNIQUE SELLING POINT</h1>
                            <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure autem velit neque.</p>
                            <button class="bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <a href="basket.html">Add to Basket</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="assets/images/mx-master-3.png">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Product Name</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">UNIQUE SELLING POINT</h1>
                            <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure autem velit neque.</p>
                            <button class="bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <a href="basket.html">Add to Basket</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="assets/images/mx-master-3.png">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Product Name</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">UNIQUE SELLING POINT</h1>
                            <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure autem velit neque.</p>
                            <button class="bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <a href="basket.html">Add to Basket</a>
                            </button>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- Newsletter Subscription -->


  <?php
  $page->renderFoot();
  ?>
