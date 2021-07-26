<?php
  include 'models/db_config.php';

  $uname="";
  $err_uname="";
  $pass="";
  $err_pass="";
  $err_db="";
  $hasError=false;

  if(isset($_POST["btn_login"])){
    if(empty($_POST["uname"])){
      $hasError=true;
      $err_uname="Username Required";
    }
    else{
      $uname=$_POST["uname"];
    }
    if(empty($_POST["pass"])){
      $hasError=true;
      $err_pass="Password Required";
    }
    else{
      $pass=$_POST["pass"];
    }
    if(!$hasError){
      $rs = authenticateStudent($uname,$pass);
      if($rs === true){
        header("Location: admin_header.php");
      }
      $err_db = $rs;
    }

  }
  /*function insertStudent($uname,$pass){
    $query = "insert into admin values (NULL,$uname','$pass')";
    return execute($query);
  }*/
  function authenticateStudent($uname,$pass){
    $query = "select * from admin where username='$uname' and password='$pass'";
    $rs = get($query);
    if(count($rs) > 0){
      return true;
    }
      return false;
  }
?>
