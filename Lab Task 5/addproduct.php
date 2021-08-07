<?php include 'admin_header.php';
  require_once 'controllers/ProductController.php';

  $categories = getAllCategories();

?>
<h5><?php echo $err_db;?></h5>
<form action="" method="post">
  <table>
    <tr>
      <td align="right">Name</td>
      <td><input type="text" name="name"></td>
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
      <td><input type="text" name="price"></td>
    </tr>
    <tr>
      <td align="right">Quantity</td>
      <td><input type="text" name="qty"></td>
    </tr>
    <tr>
      <td align="right">Description</td>
      <td><input type="text" name="description"></td>
    </tr>
    <tr>
      <td align="right">Image</td>
      <td><input type="file" name="img"></td>
    </tr>
    <tr>
            <td align="right"></td>
            <td><input type="submit" name="add_product" value="Add Category"></td>
    </tr>
  </table>
</form>
