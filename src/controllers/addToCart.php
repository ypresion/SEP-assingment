<?php
ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();

$items = 0;
//get product id
$prodID = isset($_REQUEST['prodID']) ? $_REQUEST['prodID'] : "";

//check if session alredy created, create if not and add item
if(!isset($_SESSION['basket'])){
    $_SESSION['basket'][$items] = $prodID;
    $items++;
    header('Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=productview&prodID='.$prodID.'&action=add');
//check if item already exists: redirect if yes, add if not    
} 
    $items = count($_SESSION['basket']);
    $found = false;
    
    for ($i=0;$i<$items;$i++) {
        if($prodID == $_SESSION['basket'][$i]) {
            $found = true;
            header('Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=productview&prodID='.$prodID.'&action=exists');
            break;
        }
    }
    
    if(!$found) {
        $_SESSION['basket'][$items] = $prodID;
        $items++;
        header('Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=productview&prodID='.$prodID.'&action=add');

    }

//redirect the user back to item page and display success message 

?>