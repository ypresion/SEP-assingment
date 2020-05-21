<?php
ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();


//for ($i=0;$i<count($_SESSION['basket']);$i++) {
    unset($_SESSION['basket']);
//}
    header('Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=index');

?>