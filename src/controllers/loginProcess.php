<?php
ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();

list($input, $errors) = validate_logon();
if ($errors) {
    //echo show_errors($errors);
    header("Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=login&errors=true");
}
else {
    header("Location: http://unn-w18015597.newnumyspace.co.uk/T/public/index.php?page=index");
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

    // Now do error checks on the input, e.g.,
    if (empty($input['username'])) {
        $errors[] .= "<p>You have not entered your username</p> \n ";
    }
    if (empty($input['password'])) {
        $errors[] .= "<p>You have not entered your password</p> \n";
    }


    try {
// Make a database connection
        require_once("functions.php");
        $dbConn = getConnection();

        /* Query the users database table to get the password hash for the username entered by the user, using a PDO named placeholder for the username */
        $querySQL = "SELECT passwordHash FROM a_users
WHERE un = :username";

// Prepare the sql statement using PDO
        $stmt = $dbConn->prepare($querySQL);

// Execute the query using PDO
        $stmt->execute(array(':username' => $input['username']));

        /* Check if a record was returned by the query. If yes, then there was a username matching what was entered in the logon form and we can test (we will add code to shortly) to see if the password entered in the logon form was correct. Otherwise, indicate an error. */

        $user = $stmt->fetchObject();
        if ($user) {
            $passwordHash = $user->passwordHash;
            if(password_verify($input['password'], $passwordHash)){

                $_SESSION ['logged-in'] = true ;
            }
            else{
                $errors[] .= "<p>Incorrect Username or password</p> \n  ";
            }
        }
        else {
            $errors[] .= "<p>Incorrect Username or password</p> \n ";
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

