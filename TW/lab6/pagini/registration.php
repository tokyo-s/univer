<?php
require "validate.php";

$eroare = False;
if (isset($_POST["Username_"])) {
    $username    = mysqli_real_escape_string($con, $_POST["Username_"]);
    $password = mysqli_real_escape_string($con, $_POST["Password_"]);
    $rpassword = mysqli_real_escape_string($con, $_POST["RepeatPassword"]);

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
        header("location:login.php"); 
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/login.css">

</head>
<body>

<div class="wrapper fadeInDown">
<div id="formContent">
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="1" align="left" valign="top"><h3>Registration</h3></td>
      <td colspan="1" align="right" valign="top"><h3><a href = "login.php">Login</a></h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username_" type="text" class="fadeIn second"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password_" type="password" class="fadeIn third"></td>
    </tr>
    <tr>
      <td align="right">Repeat Password</td>
      <td><input name="RepeatPassword" type="password" class="fadeIn third"></td>
    </tr>
    <tr>
      <td></td>
      <td><?php if(!empty($GLOBALS["errors"]))
        {foreach($GLOBALS["errors"] as $error){
            echo $error . "<br>";
        }}?></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Sign up" class="fadeIn fourth"></td>
    </tr>
  </table>
</form>
    </div>
    </div>
    </body>
</html>