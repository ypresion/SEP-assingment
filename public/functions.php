<<<<<<< HEAD


<?php
function getConnection() {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=unn_w18011022",
            "unn_w18011022", "OUNEQTFE");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (Exception $e) {
        /* We should log the error to a file so the developer can look at any logs. However, for now we won't */
        throw new Exception("Connection error ". $e->getMessage(), 0, $e);
    }
}



function set_session($key, $value) {

    $_SESSION[$key] = $value;
    return true;
}

function get_session($key)
{
    $session = "";

    if (isset($_SESSION[$key])) {
        $session = ($_SESSION[$key]);
        return $session;
    }


}


function check_login()
{
    $checkedLogin = get_session('logged-in');

    if  ($checkedLogin) {
        return true;
    }
    else{
        return false;
    }

}


function makePageStart() {
    $pageStartContent = <<<PAGESTART
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Review it!</title> 
		<link href="review.css" rel="stylesheet" type="text/css">
	</head>
	<body>
<div id="gridContainer">
PAGESTART;
    $pageStartContent .="\n";
    return $pageStartContent;
}

function makeHeader(){
    $headContent = <<<HEAD
		<header>
			<h1>Review it!</h1>
		</header>
HEAD;
    $headContent .="\n";
    return $headContent;
}

function makeNavMenu() {
    $navMenuContent = <<<NAVMENU
		<nav>
			<h2>Browse</h2>
			<ul>
				<li><a href="phpindex.php">Home</a></li>
				<li><a href="books.php">Books</a></li>
				<li><a href="dvd.php">DVD</a></li>
				<li><a href="games.php">Games</a></li>
			</ul>	
		</nav>
NAVMENU;
    $navMenuContent .= "\n";
    return $navMenuContent;
}

function makeMainArea() {
    $mainContent = <<<MAINAREA
		<main>
			<h2>Add your reviews of the following and more</h2>
			<h3>Jamie's America</h3>
<p>Jamie will try real American food and meet the most 
interesting cooks and producers that this vast country has to 
offer. His epic journey will take him to the heart of America: 
its people, culture, music and, most importantly, its food. As 
well as being a visually stunning journey, "Jamie's America" 
is a practical cookbook, with each chapter focusing on the 
food and recipes of a different state. Add review</p>
		</main>
MAINAREA;
    $mainContent .= "\n";
    return $mainContent;
}

function makeFooter() {
    $footContent = <<<FOOT
<footer>
<p>Product details taken from the whsmith web site</p>
</footer>
FOOT;
    $footContent .="\n";
    return $footContent;
}

function makePageEnd() {
    return "</div>\n</body>\n</html>";
}



?>



=======


<?php
function getConnection() {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=unn_w18011022",
            "unn_w18011022", "OUNEQTFE");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (Exception $e) {
        /* We should log the error to a file so the developer can look at any logs. However, for now we won't */
        throw new Exception("Connection error ". $e->getMessage(), 0, $e);
    }
}



function set_session($key, $value) {

    $_SESSION[$key] = $value;
    return true;
}

function get_session($key)
{
    $session = "";

    if (isset($_SESSION[$key])) {
        $session = ($_SESSION[$key]);
        return $session;
    }


}


function check_login()
{
    $checkedLogin = get_session('logged-in');

    if  ($checkedLogin) {
        return true;
    }
    else{
        return false;
    }

}


function makePageStart() {
    $pageStartContent = <<<PAGESTART
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Review it!</title> 
		<link href="review.css" rel="stylesheet" type="text/css">
	</head>
	<body>
<div id="gridContainer">
PAGESTART;
    $pageStartContent .="\n";
    return $pageStartContent;
}

function makeHeader(){
    $headContent = <<<HEAD
		<header>
			<h1>Review it!</h1>
		</header>
HEAD;
    $headContent .="\n";
    return $headContent;
}

function makeNavMenu() {
    $navMenuContent = <<<NAVMENU
		<nav>
			<h2>Browse</h2>
			<ul>
				<li><a href="phpindex.php">Home</a></li>
				<li><a href="books.php">Books</a></li>
				<li><a href="dvd.php">DVD</a></li>
				<li><a href="games.php">Games</a></li>
			</ul>	
		</nav>
NAVMENU;
    $navMenuContent .= "\n";
    return $navMenuContent;
}

function makeMainArea() {
    $mainContent = <<<MAINAREA
		<main>
			<h2>Add your reviews of the following and more</h2>
			<h3>Jamie's America</h3>
<p>Jamie will try real American food and meet the most 
interesting cooks and producers that this vast country has to 
offer. His epic journey will take him to the heart of America: 
its people, culture, music and, most importantly, its food. As 
well as being a visually stunning journey, "Jamie's America" 
is a practical cookbook, with each chapter focusing on the 
food and recipes of a different state. Add review</p>
		</main>
MAINAREA;
    $mainContent .= "\n";
    return $mainContent;
}

function makeFooter() {
    $footContent = <<<FOOT
<footer>
<p>Product details taken from the whsmith web site</p>
</footer>
FOOT;
    $footContent .="\n";
    return $footContent;
}

function makePageEnd() {
    return "</div>\n</body>\n</html>";
}



?>



>>>>>>> 2122a581256b4fb75eceadf70b54ed964e2af337
