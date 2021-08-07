<?php
  include 'admin_header.php';
  include 'controllers/CategoryController.php';
  $id = $_GET["id"];
  $c = getCategory($id);
?>
<h5><?php echo $err_db;?></h5>
<form action="" method="post">
    <tr>
        <td align="right"><h4>Name:</h4></td>
        <td><input type="hidden" name="id" value="<?php echo $c["id"];?>"></td>
        <td><input type="text" name="name" value="<?php echo $c["name"];?>"></td>
    </tr>
    <tr>
        <td align="right"></td>
        <td><input type="submit" name="edit_category" value="Edit Category"></td>
    </tr>
</form>

<?php include 'admin_footer.php';?>
