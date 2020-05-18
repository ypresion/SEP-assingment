<?php
require_once("../src/controllers/functions.php");

$dbConn = getConnection();

$sql =  "select * FROM a_product
       INNER JOIN a_prodCat
      ON a_prodCat.catID = a_product.catID
       ORDER BY prodName 
     ";

$queryResult = $dbConn->query($sql);

if($queryResult === false) {
echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
exit;
}
?>

<div class="text-gray-700  text-sm md:text-base md:font-medium mt-2 flex justify-center md:justify-start md:mx-4" aria-label="Breadcrumb">
			<ol class="list-none p-0 inline-flex ">
			  <li class="flex items-center uppercase">
				<a href="index.html">Home</a>
				<svg class="fill-current w-3 h-3 mx-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
			  </li>
			  <li class="flex items-center uppercase">
				<a href="#">All Products</a>
				<svg class="fill-current w-3 h-3 mx-3 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
			  </li>
			  <li>
				<a href="#" class=" hidden text-gray-500" aria-current="page">Third Level</a>
			  </li>
			</ol>
		</div>
			<!-- About Products -->
		<div class="flex flex-col border-b-2 ">
		<h1 class="text-gray-700 font-medium text-base md:text-xl uppercase  text-center  px-4 pt-2 ">All products</h1>
		<h3 class="text-gray-700 text-center text-sm md:text-xl  px-4 pb-2 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nemo quaerat earum minima, sit exercitationem aspernatur illum commodi atque ipsum.</h3></div>
		<!-- End of about products -->
		<!-- Sort Fikter -->
		<div class="flex justify-center md:justify-end md:mr-4 flex-row mt-2">
		<div class="text-base uppercase">
			<span>sort by</span>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path class="heroicon-ui" d="M 15.3 9.3 a 1 1 0 0 1 1.4 1.4 l -4 4 a 1 1 0 0 1 -1.4 0 l -4 -4 a 1 1 0 0 1 1.4 -1.4 l 3.3 3.29 l 3.3 -3.3 Z" /></svg>
		</div>
<!--  Products -->
<div class="flex flex-wrap justify-center">

    <?php
    while($rowObj = $queryResult->fetchObject()) {
        echo "<div class=\"flex flex-col my-2 p-2 h-auto max-w-sm md:w-1/2 md:max-w-md lg:w-1/3 lg:max-w-lg  xl:max-w-xl  \">
            <div class=\"flex flex-col md:items-center max-w-full hover:border-gray-600 border-2 p-6 hover:bg-gray-800 \">
                <div class=\"h-auto overflow-hidden \">
                    <a  href='productview.php?prodID={$rowObj->prodID}' data-ajax=\"false\"><img src=\"assets/ProductPics/$rowObj->prodImage\" data-ajax=\"false\" alt=\"\"></a>
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

</div>
		<!-- Pagination -->
		<ul class="flex justify-center mb-2">
			<li class="mx-1 px-2 py-2 bg-gray-200  rounded-lg ">
				<a class="flex items-center font-medium" href="#">
					<span class="mx-1">previous</span>
				</a>
			</li>
			<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
				<a class="font-normal" href="#">1</a>
			</li>
			<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
				<a class="font-normal" href="#">2</a>
			</li>
			<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
				<a class="font-normal" href="#">3</a>
			</li>
			<li class="mx-1 px-3 py-2 bg-gray-200  hover:bg-gray-700 hover:text-gray-200 rounded-lg">
				<a class="flex items-center font-medium" href="#">
					<span class="mx-1">Next</span>
				</a>
			</li>
		</ul>
