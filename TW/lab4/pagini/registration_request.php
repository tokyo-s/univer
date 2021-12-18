<?php
require "validate.php";

$eroare = False;
if (isset($_POST["username_"]) && isset($_POST["password_"]) && isset($_POST["repeatpassword"])) {
    $username    = mysqli_real_escape_string($con, $_POST["username_"]);
    $password = mysqli_real_escape_string($con, $_POST["password_"]);
    $rpassword = mysqli_real_escape_string($con, $_POST["repeatpassword"]);

    test_username($username, true);
    already_registered($username);
    password_match($password, $rpassword);
    if (count($GLOBALS["errors"]) > 0) $eroare = True;

    if (!$eroare) {
        $encryptedPassword = encrypt($password);
        $query    = "INSERT into users (username, password)
                     VALUES ('$username', '$encryptedPassword')";
        $result   = mysqli_query($con, $query);
        if (!$result) {
          registerFAIL();
          $eroare = True;
        }
    }
    if (!$eroare){
        echo json_encode(array("statusCode" => 200));
        exit;
    }
    else{
        echo json_encode(array("statusCode" => 201));
    }

}
else{
echo json_encode(array("statusCode" => 201));
}
?>