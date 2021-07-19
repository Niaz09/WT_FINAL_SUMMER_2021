<?php include 'main_header.php';?>
<?php
  include 'controllers/StudentController.php';
?>


<html>
  <head>
      <title>Log In</title>
  </head>
  <body>
      <h1>Log In</h1>
      <h5><?php echo $err_db;?></h5>
      <form action="" method="post">
          <table>
              <tr>
                  <td align="center">Username:</td>
                  <td><input type="text" name="uname" value="<?php echo $uname;?>">
                  <span><?php echo $err_uname;?></span></td>
              </tr>
              <tr>
                  <td align="center">Password:</td>
                  <td><input type="password" name="pass" value="<?php echo $pass;?>">
                  <span><?php echo $err_pass;?></span></td>
              </tr>
              <tr>
                  <td align="center"></td>
                  <td><input type="submit" name="btn_login" value="Log in"></td>
              </tr>
          </table>
      </form>
  </body>
</html>

<?php include 'main_footer.php';?>
