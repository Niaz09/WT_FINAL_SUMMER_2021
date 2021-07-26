<?php
  include 'controllers/AdminController.php';
?>
  <h5><?php echo $err_db;?></h5>
  <form action="" method="post">
      <tr>
        <td align="right"><h4>Name:</h4></td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td align="right"><h4>Department</h4></td>
        <td>
            <select name="department">
                <option selected disabled>Department</option>
                <option>CSE</option>
                <option>BBA</option>
                <option>LAW</option>
            </select>
        </td>
      </tr>
      <tr>
          <td align="right"></td>
          <td><input type="submit" name=add_student value="Add Category"></td>
      </tr>
    </form>

<?php include 'admin_footer.php';?>
