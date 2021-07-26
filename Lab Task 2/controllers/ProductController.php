<?php
  require_once 'models/db_config.php';
  $err_db="";
  $hasError=false;

  if(isset($_POST["add_product"])){

    if(!$hasError){
      $rs = insertProduct($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["qty"],$_POST["description"],"dummy");
      if($rs===true){
        header("Location: allproducts.php");
      }
      $err_db = $rs;
    }
  }
  else if(isset($_POST["edit_product"])){
    if(!$hasError){
      $rs = updateProduct($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["qty"],$_POST["description"],$_POST["id"]);
      if($rs===true){
        header("Location: allproducts.php");
      }
      $err_db = $rs;
    }
  }

  function insertProduct($name,$c_id,$price,$qty,$description,$img){
    $query = "insert into products values (NULL,'$name','$c_id','$price','$qty','$description','$img')";
    echo $query;
    return execute($query);

  }
  function getProducts(){
    $query = "select p.*,c.name as 'c_name' from products p left join categories c on p.c_id = c.id";
    $rs = get($query);
    return $rs;

  }
  function getAllCategories(){
    $query = "select * from categories";
    $rs = get($query);
    return $rs;
  }
  function getProduct($id){
    $query = "select * from products where id=$id";
    $rs = get($query);
    return $rs[0];
  }
  function updateProduct($name,$c_id,$price,$qty,$description,$id){
    $query = "update products set name='$name',c_id='$c_id,price='$price',qty='$qty',description='$description' where id=$id";
    return execute($query);
  }
?>
