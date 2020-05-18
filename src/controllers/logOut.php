
<?php
ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();

$_SESSION = array();

session_destroy();

header("Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=index");
