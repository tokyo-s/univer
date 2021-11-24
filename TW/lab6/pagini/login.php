<?php 

require "validateData.php";

session_start();
$eroare = False;
if (isset($_POST["Username"])) {
    $username    = mysqli_real_escape_string($con, $_POST["Username"]);
    $password = mysqli_real_escape_string($con, $_POST["Password"]);
    test_username($username,false);
    test_password($password, false);

    if (count($GLOBALS["errors"]) > 0) $eroare = True;
    if (!$eroare) {
        if (!decrypt($username, $password)) $eroare = True;
    }

    if (!$eroare){
      $_SESSION['UserData']['Username'] = $password;
      header("location:../index.php"); 
      exit;
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
      <td colspan="1" align="left" valign="top"><h3>Login</h3></td>
      <td colspan="1" align="right" valign="top"><h3><a href = "registration.php">registration</a></h3></td>
    </tr>
    <tr>
      <td align="right" >Username</td>
      <td><input name="Username" type="text" class="fadeIn second"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="fadeIn third"></td>
    </tr>


    <tr>
      <td></td>
      <td><?php if(!empty($GLOBALS["errors"]))
        {foreach($GLOBALS["errors"] as $error){
            echo $error . "<br>";
        }} ?></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="fadeIn fourth"></td>
    </tr>
  </table>
</form>
    </div>
    </div>
    </body>
</html>