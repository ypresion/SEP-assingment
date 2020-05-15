<!DOCTYPE html> 
<html>
<head>
    <title>T Gaming</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="build/tailwind.css">
    <link rel="stylesheet" href="styles/jquery.css">
    <link rel="stylesheet" href="styles/global.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script>

        $(document).ready(function(){

           $('#index').load("../src/views/index.php");
           $('#login').load("../src/views/login.php"); 
           $('#register').load("../src/views/register.php");
           $('#product').load("../src/views/product.php");

        });
        </script>
</head>

<body>
    

    <div data-role="page" id="index"></div>
    <div data-role="page" id="login"></div>
    <div data-role="page" id="register"></div>
    <div data-role="page" id="product"></div>
</body>
</html>