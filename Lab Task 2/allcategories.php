<?php
  include 'admin_header.php';
  include 'controllers/CategoryController.php';
  $categories = getAllCategories();
?>

<h3>All Categories</h3>
<table>
    <thead>
        <th>Sl#</th>
        <th>Name</th>
        <th>Product Count</th>
    </thead>
    <tbody>
        <?php
          $i=1;
          foreach($categories as $c){
            $id = $c["id"];
            echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$c["name"]."</td>";
              echo '<td><a href="editcategory.php?id='.$id.'">Edit</a></td>';
              echo '<td>Delete</td>';
            echo "</tr>";
            $i++;
          }
        ?>
    </tbody>
</table>

<?php include 'admin_footer.php';?>
