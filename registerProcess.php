<?php
ini_set("session.save_path", "/home/unn_w18011022/sessionData");
session_start();

list($input, $errors) = validate_logon();
if ($errors) {
    echo show_errors($errors);
}
else {

    $input['password'] = password_hash( $input['password'] ,  PASSWORD_DEFAULT);

    require_once("functions.php");
    $dbConn = getConnection();

    $sqlInsert = "INSERT INTO a_users (fn, sn, un, passwordHash) VALUES (:firstname, :surname , :username, :passwordHash)";
    $stmt = $dbConn->prepare($sqlInsert);
    $stmt->execute(array(':firstname' =>  $input['first'], ':surname' => $input['last'], ':username' => $input['username'],':passwordHash' => $input['password']));

    echo "<p> Registered! </p>";
    echo "<a href = login.php>Click here to go to login page</a>";

}




function validate_logon ()
{
    $input = array();    // Create array for the form input
    $errors = array(); // Create an empty array to hold error messages

    /* Retrieve variables and store in array, then trim and store the 	modified value, e.g., */
    $input['username'] = filter_has_var(INPUT_POST, 'username') ? $_POST['username'] : null;
    $input['username'] = trim($input['username']);
    $input['password'] = filter_has_var(INPUT_POST, 'password') ? $_POST['password'] : null;
    $input['password'] = trim($input['password']);
    $input['first'] = filter_has_var(INPUT_POST, 'first') ? $_POST['first'] : null;
    $input['first'] = trim($input['first']);
    $input['last'] = filter_has_var(INPUT_POST, 'last') ? $_POST['last'] : null;
    $input['last'] = trim($input['last']);
    $input['passwordCheck'] = filter_has_var(INPUT_POST, 'passwordCheck') ? $_POST['passwordCheck'] : null;
    $input['passwordCheck'] = trim($input['passwordCheck']);

    // Now do error checks on the input, e.g.,
    if (empty($input['username'])) {
        $errors[] .= "<p>You have not entered your username</p> \n ";
    }
    if (empty($input['password'])) {
        $errors[] .= "<p>You have not entered your password</p> \n";
    }
    if (empty($input['first'])) {
        $errors[] .= "<p>You have not entered your first name</p> \n";
    }
    if (empty($input['last'])) {
        $errors[] .= "<p>You have not entered your last name</p> \n";
    }
    if (empty($input['passwordCheck'])) {
        $errors[] .= "<p>You have not re-entered your password to see if it matches</p> \n";
    }



    try {
// Make a database connection
        require_once("functions.php");

        if (strlen($input['password']) <= 8) {
            $errors[] .= "<p>Password is too short. Please try again</p> \n";
        }
        if (strlen($input['username']) < 5 ){
            $errors[] .= "<p>Username needs to be atleast 6 characters long</p> \n";
        }
        if (strlen($input['username']) >= 49){
            $errors[] .= "<p>Username needs to be less than 50 characters long</p> \n";
        }

        if ($input['password'] !==  $input['passwordCheck'])
        {
            $errors[] .= "<p>The passwords you entered do not match. Please enter the same password</p> \n";

        }


        $dbConn = getConnection();

        /* Query the users database table to get the password hash for the username entered by the user, using a PDO named placeholder for the username */
        $querySQL = "SELECT username FROM users
                     WHERE username = :username";
        $stmt = $dbConn->prepare($querySQL);
        $stmt->execute(array(':username' => $input['username']));
        $user = $stmt->fetchObject();
        if ($user) {

            $errors[] .= "<p>Username already exists</p> \n";
        }









    } catch (Exception $e) {
        $errors[] .= "There was a problem: " . $e->getMessage();
    }



    // Return an array of the input and errors arrays
    return array($input, $errors);
}


function show_errors ($errors){
    $output = "" ;
    foreach($errors as $arrayItem)
    {
        $output .= $arrayItem ;
    }
    return $output ;
}


