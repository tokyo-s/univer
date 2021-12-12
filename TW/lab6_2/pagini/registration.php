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
    <tr>
      <td colspan="2" align="center" valign="top"></td>
    </tr>
     <tr>
      <td colspan="1" align="left" valign="top"><h3>Registration</h3></td>
      <td colspan="1" align="right" valign="top"><h3><a href = "login.php">Login</a></h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username_" id = "Username_" type="text" class="fadeIn second"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password_" id ="Password_" type="password" class="fadeIn third"></td>
    </tr>
    <tr>
      <td align="right">Repeat Password</td>
      <td><input name="RepeatPassword" id = "RepeatPassword" type="password" class="fadeIn third"></td>
    </tr>
    <tr>
      <td></td>
      <td><p id = "err"></p></td></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" id="submit" value="Sign up" class="fadeIn fourth"></td>
    </tr>
  </table>
</form>
    </div>
    </div>
    <script>
      $(document).ready(function () {
  
  $('#submit').click(function verif(e) {
          console.log("lul?")

        var username = $('#Username_').val();
        var password = $('#Password_').val();
        var repeatpwd = $('#RepeatPassword').val();
        if (username.length!=0 && password.length!=0 && repeatpwd.length!=0){
          $.ajax({
          type: 'POST',
          url: "registration_request.php",
          data:{
            username_: username,
            password_: password,
            repeatpassword: repeatpwd
          },
          cache: false,
          success: function (response) {
            var response = JSON.parse(response);
            if(response.statusCode == 200){

              window.location.href = "login.php";

            } else{
              $('#Username_').val('')
              $('#Password_').val('')
              $('#RepeatPassword').val('')
              $('#err').html("Wrong password or username")
            }
          },
          error: function() {
            $('#Username_').val('')
            $('#Password_').val('')
            $('#RepeatPassword').val('')

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