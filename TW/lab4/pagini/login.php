
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/login.css">
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="   crossorigin="anonymous"></script>

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
      <td><input name="Username" id = "username" type="text" class="fadeIn second"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" id = "password" type="password" class="fadeIn third"></td>
    </tr>


    <tr>
      <td></td>
      <td><p id = "err"></p></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" id ="submitbtn" value="Login" class="fadeIn fourth"></td>
    </tr>
  </table>
</form>
    </div>
    </div>

    <script>
      $(document).ready(function () {
  
  $('#submitbtn').click(function verif(e) {
          console.log("lul?")

        var username = $('#username').val();
        var password = $('#password').val();
        if (username.length!=0 && password.length!=0){
          $.ajax({
          type: 'POST',
          url: "login_request.php",
          data:{
            username: username,
            password: password
          },
          cache: false,
          success: function (response) {
            var response = JSON.parse(response);
            if(response.statusCode == 200){

              window.location.href = "../index.php";

            } else{
              $('#username').val('')
              $('#password').val('')
              $('#err').html("Wrong password or username")
            }
          },
          error: function() {
            $('$username').val('')
            $('$password').val('')

            alert("Something Wrong");
          }
      });
        }
        else{
          $('#err').html("Fill the gaps")

        }

        
      return false;
    })
});

      </script>
    </body>
</html>