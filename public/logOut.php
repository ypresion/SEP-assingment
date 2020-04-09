<?php
ini_set("session.save_path", "/home/unn_w18011022/sessionData");
session_start();

$_SESSION = array();

session_destroy();

echo "<p>You have logged out!</p> \n";
echo "<a href = loginForm.html>Click to login</a>";