<?php $title= "Deleting Job"; include "./inc/head.php"; ?>
<?php 
 if(!$_SESSION["permissions_ctrl"]){
    header("Location: ./home.php");
 }
if(isset($_POST["delete_job"])){
    $_SESSION['job_to_delete']= $_POST['job_to_delete'];
    $_SESSION['job_title_to_delete']= $_POST['job_title_to_delete'];
}else{
    header("Location: ./home.php");
}

?>
<div class="container login-container">
    <h1 class="container mian-slogan"> 
    <?php 
    include './inc/db.php';
    $result = $con-> query ( "SELECT * FROM   employee  WHERE jid='{$_SESSION['job_to_delete']}' "); 
    if($row = $result -> fetch_assoc()){
        echo "query done!";
        
    }else{
        echo(" Do you want to delete the job of: ". "{$_SESSION['job_title_to_delete']}"); 
    }
            
    ?>    
    </h1><br>
<div class="list-of-content" >
        <table>
                <?php   
                    $result = $con-> query ( "SELECT * FROM   employee WHERE jid='{$_SESSION['job_to_delete']}'"); 
                    while($row = $result -> fetch_assoc()):
                ?>
            <tr class="table-row">
                <td class="hiding"> <?php $_SESSION['emFName'] =$row['emFName']; echo $_SESSION['emFName'] ?> </td>
                <td class="hiding"> <?php $_SESSION['emLName']=$row['emLName']; echo $_SESSION['emLName'] ?>  </td>
                <td class="table-cell">                 
                    <form action="" method="POST">
                        <input type="submit" style="width:12em;" class="btn btn-info" name="emp_job_delete" value="<?php echo  $_SESSION['emFName']." ".  $_SESSION['emLName'] ?>">
                    </form>
                </td>
            </tr>
                <?php 
                    endwhile; 
                ?>
            <tr class="table-row">
                <td class="hiding">  </td>
                <td class="hiding">  </td>
              
                <td class="table-cell" style="height: 7em;"> 
                <hr class="btn-danger" >
                    <form action="./job_deactivating.php" method="POST">                         
                        <input  class="hiding" name="job_deactivate" value="<?php echo ("{$_SESSION['job_to_delete']}")?>">
                        <input style="width: 100%; " type="submit" class="btn btn-danger" name="confirm" value="Delete <?php echo ("{$_SESSION['job_title_to_delete']}") ?>?">
                    </form>
                </td>
            </tr>
        </table>
    
    <?php    
        if(isset($_POST["chngPerm"])){
        $_SESSION['jidPermChng']=$_POST["jid-for-chng"];
        echo "<h1>".$_SESSION["jid-for-chng"]."<h1>";
        }
    ?>
</div>
</div>
<?php include "./inc/footer.php" ;?>