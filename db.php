<?php

$con = new mysqli("localhost","S.Mina","aCsdUJB6","sminadb");
    //check connection
    if($con -> connect_error){
      die("Connection Error:" . $con->connect_error);
    }
  //echo "Connected Successfully";

?>
