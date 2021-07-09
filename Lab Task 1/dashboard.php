<?php
  session_start();
?>

<html>
  <body>
      <h1 align="center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
      <a href="add_product.php">Add Product</a>
      <a href="">All Products</a>
      <a href="">All Users</a>
      <a href="">All Categories</a>
  </body>
</html>
