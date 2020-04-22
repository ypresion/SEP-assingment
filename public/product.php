<?php
ini_set("session.save_path", "/home/unn_w18011022/sessionData");
session_start();
require_once("functions.php");

$dbConn = getConnection();

$sql =  "select * FROM a_product
       INNER JOIN a_prodCat
      ON a_prodCat.catID = a_product.catID
       INNER JOIN a_stock
       ON a_stock.sID = a_product.sID
       ORDER BY prodName 
     ";

$queryResult = $dbConn->query($sql);

if($queryResult === false) {
    echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
    exit;
}

?>


<div class='grid-container'>
<style>
    .grid-container {
        display: inline-grid;
        grid-template-columns: auto auto auto;
        padding: 10px;
    }

    .grid-item {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.8);
        padding: 20px;
        font-size: 30px;
        text-align: center;
    }
</style>
<?php

while($rowObj = $queryResult->fetchObject()) {
        echo "<div class=\"grid-item\"><img src=\"ProductPics/$rowObj->prodImage\" height=\"250\" width=\"250\"/>
        <span class=\'title\'> <h2>{$rowObj->prodName}</h2></span>
        <span class=\'price\'> <h3>£{$rowObj->prodPrice}</h3></span>        
</div>";

}
?>
</div>
