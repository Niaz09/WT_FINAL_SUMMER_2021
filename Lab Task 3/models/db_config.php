<?php
  $db_server="localhost"; //same always but variable name can be changed
  $db_uname="root"; // same always but variable can changed by any name
  $db_password=""; //password by default null but variable can be changed
  $db_name="wt_sum21_d"; // here wt is database name,this database and variable both are can be changed



  function execute($query){ //responsible for running, insert, delete & update
    global $db_server,$db_uname,$db_password,$db_name;
    $conn = mysqli_connect($db_server,$db_uname,$db_password,$db_name);
    if($conn){
      if(mysqli_query($conn,$query)){
        return true;
      }
      else{
        return mysqli_error($conn);
      }
    }
  }

  function get($query){// responsible for running select queries
      global $db_server,$db_uname,$db_password,$db_name;
      $conn = mysqli_connect($db_server,$db_uname,$db_password,$db_name);
      $data = array();
      if($conn){
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
          $data[] = $row;
        }
      }
      return $data;
  }
?>
