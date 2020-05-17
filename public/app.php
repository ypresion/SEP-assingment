<!DOCTYPE html> 
<html>
<head>
    <title>T Gaming - Shop Best Gaming Accessories Online!</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="build/tailwind.css">
    <link rel="stylesheet" href="styles/jquery.css">
    <link rel="stylesheet" href="styles/global.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script>
        
        $.mobile.page.prototype.options.domCache = true;
        $(document).ready(function(){

           //Load main pages 
           $('#index').load("http://unn-w18015597.newnumyspace.co.uk/T/src/views/index.php");
           $('#login').load("http://unn-w18015597.newnumyspace.co.uk/T/src/views/login.php"); 
           $('#register').load("http://unn-w18015597.newnumyspace.co.uk/T/src/views/register.php");
           $('#product').load("http://unn-w18015597.newnumyspace.co.uk/T/src/views/product.php");
           $('#basket').load("http://unn-w18015597.newnumyspace.co.uk/T/src/views/basket.php");
        });
        </script>
</head>

<body>

<div data-role="page" id="index" rel="external" data-prefetch="true"></div>
<div data-role="page" id="login"></div>
<div data-role="page" id="register"></div>
<div data-role="page" id="product"></div>
<div data-role="page" id="basket"></div>

</body>
</html>