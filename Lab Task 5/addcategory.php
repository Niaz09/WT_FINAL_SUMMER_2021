<?php
  include 'admin_header.php';
  include 'controllers/CategoryController.php';
?>
  <h5><?php echo $err_db;?></h5>
  <form action="" method="post">
      <tr>
        <td align="right"><h4>Name:</h4></td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
          <td align="right"></td>
          <td><input type="submit" name=add_category value="Add Category"></td>
      </tr>
    </form>

<?php include 'admin_footer.php';?>
