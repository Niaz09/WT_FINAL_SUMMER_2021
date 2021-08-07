<?php
  include 'admin_header.php';
  require_once 'controllers/ProductController.php';
  $id = $_GET["id"];
  $pr = getProduct($id);
?>
<h5><?php echo $err_db;?></h5>
<form action="" method="post">
    <tr>
        <td align="right"><h4>Name:</h4></td>
		<td><input type="hidden" name="id" value="<?php echo $pr["id"];?>"></td>
        <td><input type="text" name="name" value="<?php echo $pr["name"];?>"></td>
    </tr>
	<tr>
        <td align="right"><h4>Price:</h4></td>
	
        <td><input type="text" name="price" value="<?php echo $pr["price"];?>"></td>
    </tr>
	<tr>
        <td align="right"><h4>Quantity:</h4></td>

        <td><input type="text" name="qty" value="<?php echo $pr["qty"];?>"></td>
    </tr>
	<tr>
        <td align="right"><h4>Description:</h4></td>
	
        <td><input type="text" name="description" value="<?php echo $pr["description"];?>"></td>
    </tr>
	
    <tr>
        <td align="right"></td>
        <td><input type="submit" name="edit_product" value="Edit Product"></td>
    </tr>
</form>

<?php include 'admin_footer.php';?>
