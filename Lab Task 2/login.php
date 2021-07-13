<?php
  include 'controllers/UserController.php';

?>

<html>
  <head>
      <title>Login</title>
  </head>
  <body>
      <fieldset>
          <legend><h1>Login</h1></legend>
          <form action="" method="post">
              <table>

                  
                  <tr>
                      <td align="right"><h4>Email:</h4></td>
                      <td><input type="text" name="email" value="<?php echo $email;?>">
                        <span><?php echo $err_email;?></span></td>
                  </tr>
                  <tr>
                      <td align="right"><h4>Password:</h4></td>
                      <td><input type="password" name="password" value="<?php echo $password;?>">
                        <span><?php echo $err_password;?></span></td>
                  </tr>
                  <tr>
                      <td><input type="submit" name="sign_up" value="Login"></td>
                  </tr>

              </table>
          </form>
      </fieldset>
  </body>
</html>
