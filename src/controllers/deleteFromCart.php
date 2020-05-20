<?php

ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();

$remove = isset($_REQUEST['remove']) ? $_REQUEST['remove'] : "";

if (isset($remove)) {
    
    for($i=0; $i<count($_SESSION['basket']); $i++) {
        if($remove == $_SESSION['basket'][$i]) {
            unset($_SESSION['basket'][$i]);
            $_SESSION["basket"] = array_values($_SESSION["basket"]);
            header('Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=basket');
        }
    }
} 
?>