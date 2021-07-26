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
        <td><input type="text" value="<?php echo $pr["name"];?>"></td>
    </tr>
    <tr>
      <td align="right">Category</td>
      <td><select name="c_id">
        <option disabled selected>Choose</option>
        <?php
          foreach($categories as $c){
            echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
          }
        ?>
      </select></td>
    </tr>
    <tr>
      <td align="right">Price</td>
      <td><input type="text" value="<?php echo $pr["price"];?>" name="price"></td>
    </tr>
    <tr>
      <td align="right">Quantity</td>
      <td><input type="text" value="<?php echo $pr["qty"];?>" name="qty"></td>
    </tr>
    <tr>
      <td align="right">Description</td>
      <td><input type="text" value="<?php echo $pr["description"];?>" name="description"></td>
    </tr>
    <tr>
        <td align="right"></td>
        <td><input type="submit" name="edit_product" value="Edit Product"></td>
    </tr>
</form>

<?php include 'admin_footer.php';?>
