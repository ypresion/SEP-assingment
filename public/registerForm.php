<?php
ini_set("session.save_path", "/home/unn_w18011022/sessionData");
session_start();
require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

<form method="post" action="registerProcess.php">
    <h1>Register here!</h1>
    <p>First name <input type="text" name="first"></p>
    <p>Last name <input type="text" name="last"></p>
    <p>Username <input type="text" name="username"></p>
    <p>Password <input type="password" name="password"></p>
    <p>Confirm Password <input type="password" name="passwordCheck"></p>
    <input type="submit" value="Register">
</form>



</body>
</html>