<?php
  include 'models/db_config.php';
  $name="";
  $err_name="";
  $uname="";
  $err_uname="";
  $email="";
  $err_email="";
  $password="";
  $err_password="";
  $err_db="";
  $hasError=false;

  if(isset($_POST["sign_up"])){
    if(empty($_POST["name"]))
    {
	     $hasError=true;
	     $err_name="Name required";
    }
   else if(strlen($_POST["name"])>=20)
    {
	     $hasError=true;
	     $err_name="Name must be equal or less than 20 characters";
    }
   else
    {
	     $name=$_POST["name"];
    }
    if(empty($_POST["uname"]))
    {
   	  $hasError=true;
   	  $err_uname="User name required";
    }
    elseif(strlen($_POST["uname"])>=10)
    {
   	  $hasError=true;
   	  $err_uname="Username must be equal or less than 10 characters";
    }
    else
    {
   	  $uname=$_POST["uname"];
    }
    if(empty($_POST["email"])){
      $err_email="Email Address Required";
    }

    else{
			$s=strpos($_POST["email"],"@");
            if($s!=false){
            $t=strpos($_POST["email"],".", $s+1);
                if($t!=false){
                    $email=$_POST["email"];
                  }
                else{
                        $err_email="Invalid email";
                }
            }
            else{
                    $err_email="Invalid email";
            }
        }
      if(empty($_POST["password"])){
    			$hasError = true;
    			$err_password = "Password Required";
    		}
    	else if(strlen($_POST["password"]) >= 10){
    			$hasError = true;
    			$err_password = "Password must be equal or less than 10 characters";
    		}
    	else{
    			$password = $_POST["password"];
    		}

        if(!$hasError){
          $rs = insertUser($name,$uname,$email,$password);
          if($rs===true){
            header("Location: login.php");

          }
          $err_db=$rs;

        }
    }
    function insertUser($name,$uname,$email,$password){
      $query = "insert into users values(NULL,'$name','$uname','$email','$password')";
      return execute($query);
    }




?>
