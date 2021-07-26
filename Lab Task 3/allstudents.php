<?php
  include 'models/db_config.php';

  $name="";
  $err_name="";
  $dob="";
  $err_dob="";
  $credit="";
  $err_credit="";
  $cgpa="";
  $err_cgpa="";
  $hasError=false;

  if(isset($_POST["add_student"])){
    if(empty($_POST["name"])){
      $hasError=true;
      $err_name="Name Required";
    }
    else{
      $name=$_POST["name"];
    }
    if(empty($_POST["dob"])){
      $hasError=true;
      $err_dob="Date of Birth Required";
    }
    else{
      $dob=$_POST["dob"];
    }
  }
?>
