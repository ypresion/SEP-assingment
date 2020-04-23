


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

