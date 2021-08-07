
<?php include 'main_header.php';?>
<?php
  include 'controllers/UserController.php';
?>


<html>
  <head>
      <title>Sign Up</title>
  </head>
  <body>
      <h1>Sign Up</h1>
      <h5><?php echo $err_db;?></h5>
      <form action="" method="post">
          <table>
              <tr>
                  <td align="center">Name:</td>
                  <td><input type="text" name="name" value="<?php echo $name;?>">
                  <span><?php echo $err_name;?><span></td>
              </tr>
              <tr>
                  <td align="center">Username:</td>
                  <td><input type="text" name="uname" value="<?php echo $uname;?>">
                  <span><?php echo $err_uname;?></span></td>
              </tr>
              <tr>
                  <td align="center">Email:</td>
                  <td><input type="text" name="email" value="<?php echo $email;?>">
                  <span><?php echo $err_email;?></span></td>
              </tr>
              <tr>
                  <td align="center">Password:</td>
                  <td><input type="password" name="pass" value="<?php echo $pass;?>">
                  <span><?php echo $err_pass;?></span></td>
              </tr>
              <tr>
                  <td align="center"></td>
                  <td><input type="submit" name="sign_up" value="Sign Up"></td>
              </tr>
          </table>
      </form>
  </body>
</html>

<?php
  include 'main_footer.php';
?>
