
<?php
ini_set("session.save_path", "/home/unn_w18011022/sessionData");
session_start();

$_SESSION = array();

session_destroy();

header("Location: http://unn-w18011022.newnumyspace.co.uk/SEP-assingment/public/index.php");
