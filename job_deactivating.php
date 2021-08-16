<?php
session_start();

if(isset($_POST["confirm"])){
    $_SESSION['job_deactivate']= $_POST['job_deactivate'];
}else{
    echo " it didn't set !!!";
}


include './inc/db.php';

if($con->query("UPDATE  jobs SET is_job_active=0 WHERE jid='{$_SESSION['job_deactivate']}' ")){
    header("Location: ./permissions.php");  

}else{
    echo("Error description: " . $con -> error);

    echo($_POST['job_deactivate']); 
}

?>

