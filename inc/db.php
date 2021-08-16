<?php

$con = new mysqli("localhost","root","","sminadb");
    //check connection
    if($con -> connect_error){
      die("Connection Error:" . $con->connect_error);
    }
  //echo "Connected Successfully";

?>
