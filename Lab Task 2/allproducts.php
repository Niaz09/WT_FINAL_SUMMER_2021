<?php
  include 'admin_header.php';
  require_once 'controllers/ProductController.php';
  $products = getProducts();
?>

<html>
  <h3>All Products</h3>
  <form>
    <table>
      <thead>
        <th>SL#</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $i = 1;
          foreach($products as $p){
            echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$p["name"]."</td>";
              echo "<td>".$p["c_name"]."</td>";
              echo "<td>".$p["price"]."</td>";
              echo "<td>".$p["qty"]."</td>";
              echo '<td><a href="editproduct.php?id='.$p["id"].'">Edit</a></td>';//id pass korte hobe jate jei product shetar value dekhano jai. String ekhane break korbo duita . diye. And $p["id"] concate kore dibo
              echo '<td>Delete</td>';
           echo "</tr>";
           $i++;
          }
        ?>
      </tbody>
    </table>
  </form>
</html>
