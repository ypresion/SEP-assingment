<?php
list($input, $errors) = validate_register_newsletter();
if ($errors) {
echo show_errors($errors);
}
else {

require_once("functions.php");
$dbConn = getConnection();

$sqlInsert = "INSERT INTO a_newsletter (fullname, email, subscribed) VALUES (:fullname, :email, :subscribed)";
$stmt = $dbConn->prepare($sqlInsert);
$stmt->execute(array(':fullname' =>  $input['fn'], ':email' => $input['email'],':subscribed' => $input['subscribe'] ));

echo "<p> Thank you for subscribing!</p>";
echo "<a href = index.php>Click here to go to homepage</a>";

}



function validate_register_newsletter()
{
$input = array();    // Create array for the form input
$errors = array(); // Create an empty array to hold error messages

/* Retrieve variables and store in array, then trim and store the modified value*/
$input['fn'] = filter_has_var(INPUT_POST, 'fn') ? $_POST['fn'] : null;
$input['fn'] = trim($input['fn']);
$input['email'] = filter_has_var(INPUT_POST, 'email') ? $_POST['email'] : null;
$input['email'] = trim($input['email']);
$input['subscribe'] = "1";

// Now do error checks on the input, e.g.,
if (empty($input['fn'])) {
$errors[] .= "<p>You have not entered your fullname</p> \n ";
}
if (empty($input['email'])) {
$errors[] .= "<p>You have not entered your email</p> \n";
}


try {
// Make a database connection
require_once("functions.php");


$dbConn = getConnection();

/* Query to see of email is already registered, using a PDO named placeholder for the email */
$querySQL = "SELECT email FROM a_newsletter
WHERE email = :email";
$stmt = $dbConn->prepare($querySQL);
$stmt->execute(array(':email' => $input['email']));
$user = $stmt->fetchObject();
if ($user) {

$errors[] .= "<p>email already registered!</p> \n";
}


} catch (Exception $e) {
$errors[] .= "There was a problem: " . $e->getMessage();
}


// Return an array of the input and errors arrays
return array($input, $errors);
}


function show_errors($errors)
{
$output = "";
foreach ($errors as $arrayItem) {
$output .= $arrayItem;
}
return $output;
}

