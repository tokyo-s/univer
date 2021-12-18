<?php 

require "validate.php";

session_start();
$eroare = False;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username    = mysqli_real_escape_string($con, $_POST["username"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    test_username($username,false);
    test_password($password, false);

    if (count($GLOBALS["errors"]) > 0) $eroare = True;
    if (!$eroare) {
        if (!decrypt($username, $password)) $eroare = True;
    }

    if (!$eroare){
      $_SESSION['UserData']['Username'] = $password;
      echo json_encode(array("statusCode" => 200));
      exit;
    }
    echo json_encode(array("statusCode" => 201));

}

?>