<?php
require "db_connector.php";

$GLOBALS["errors"] = array();

function test_password($password, $registration)
{
    if (empty($password)) {
        array_push($GLOBALS["errors"], "Introduce password");
    } else {
        $nr    = preg_match('@[0-9]@', $password);
        $upper = preg_match('@[A-Z]@', $password);
        $lower = preg_match('@[a-z]@', $password);

        if (!($upper && $lower && $nr && strlen($password) >= 6) && $registration) {

            array_push($GLOBALS["errors"], "Password shoud consist of minimum 6 characters, having minimum 1 small letter, 1 big letter, and one number");
        }
    }
}

function test_username($username, $registration)
{
    if (empty($username)) {
        array_push($GLOBALS["errors"], "Introduce username");
    }
    else if (is_numeric($username[0]) && $registration)
    {
        array_push($GLOBALS["errors"], "Username can't start with a number");

    }
    // if starts with a number also error
}

function password_match($password, $repeatpassword)
{
    test_password($password, true);
    test_password($repeatpassword, true);
    if ($password  != $repeatpassword) {
        array_push($GLOBALS["errors"], "Passwords doesn't match");
    }
}

function already_registered($username)
{
    $result = mysqli_query($GLOBALS["con"], "SELECT username FROM users WHERE username='$username' LIMIT 1");
    if (mysqli_fetch_assoc($result)) {
        array_push($GLOBALS["errors"], "Already registered username");
    }
}

function registerFAIL()
{
    array_push($GLOBALS["errors"], "Registering error");
}

function encrypt($password)
{
    return md5($password);
}

function decrypt($username, $password)
{
    $encrypted = encrypt($password);
    $query = "SELECT * FROM users WHERE 
        username='$username' AND password='$encrypted'";
    $result   = mysqli_query($GLOBALS["con"], $query)->num_rows;
    if (!$result) {loginFAIL();}
    return $result;
}

function loginFAIL()
{
    array_push($GLOBALS["errors"], "wrong username or password");
}
