<?php
  session_start();
?>


<html>
  <body>
      <h1 align="center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
      <a href="">Add Product</a>
      <a href="">All Products</a>
      <a href="">All Users</a>
      <a href="">All Categories</a>
      <br>
      <form action="" method="post">
        Id: <input type="text" name="uname" value=""><br>
        Name: <input type="text" name="uname" value=""><br>
        Quantity: <input type="text" name="uname" value=""><br>
        Price: <input type="text" name="uname" value=""><br>
        Description: <input type="text" name="uname" value=""><br>

        <input type="submit" value="Add">
      </form>
  </body>
</html>
