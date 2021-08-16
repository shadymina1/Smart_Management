<?php
include "./inc/db.php";
if($insert_job = $con-> query 
        ( "INSERT INTO 
        jobs (jid,title) 
        VALUES
        (NULL,'(New job, please click)') " )){
  header("Location: ./permissions.php");   
}else{
        echo("Error description: " . $con -> error);
}

?>