<?php
  include 'controllers/UserController.php';

?>

<html>
  <head>
      <title>Signup</title>
  </head>
  <body>
      <fieldset>
          <legend><h1>Signup</h1></legend>
          <h5><?php echo $err_db;?></h5>
          <form action="" method="post">
              <table>
                  <tr>
                      <td align="right"><h4>Name:</h4></td>
                      <td><input type="text" name="name" value="<?php echo $name;?>">
                      <span><?php echo $err_name;?></span></td>
                  </tr>
                  <tr>
                      <td align="right"><h4>Username:</h4></td>
                      <td><input type="text" name="uname" value="<?php echo $uname;?>">
                        <span><?php echo $err_uname;?></span></td>
                  </tr>
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
                      <td><input type="submit" name="sign_up" value="Sign Up"></td>
                  </tr>

              </table>
          </form>
      </fieldset>
  </body>
</html>
