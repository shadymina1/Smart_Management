<?php $title= "Home"; include "./inc/head.php"; ?>
<?php 
if(!$_SESSION["permissions_ctrl"]){
    header("Location: ./home.php");
}
?>
<div class="container login-container">
    <h1 class="container mian-slogan"> Click on a job title to review and edit employees permissions</h1><br>
<div class="list-of-content" >
        <table>
                <?php   
                    include './inc/db.php';
                    $result = $con-> query ( "SELECT * FROM   jobs WHERE is_job_active=1"); 
                    while($row = $result -> fetch_assoc()):
                        if($row['jid']==1){
                            continue;
                        }
                ?>
            <tr class="table-row">
                <td class="hiding"> <?php $_SESSION['jidPermChng'] =$row['jid']; echo $_SESSION['jidPermChng'] ?> </td>
                <td class="hiding"> <?php $_SESSION['title-perm-chng']=$row['title']; echo $_SESSION['title-perm-chng'] ?>  </td>
                    <td class="table-cell">                 
                    <form action="./change_permissions.php" method="POST">
                        <input type="submit" style="width:12em;" class="btn btn-success" name="chngPermBtn" value="<?php echo  $_SESSION['title-perm-chng'] ?>">
                        <input class="hiding" type="text" name="jid-for-chng" value="<?php echo $_SESSION['jidPermChng'];?>"> 
                    </form>
                </td>
                <td>
                <form action="./deleting_job.php" method="POST">

                    <input class="hiding" type="text" name="job_to_delete" value="<?php echo $_SESSION['jidPermChng'];?>"> 
                    <input class="hiding" type="text" name="job_title_to_delete" value="<?php echo $_SESSION['title-perm-chng'];?>"> 
                    <input type="submit" style="width:4.2em;" class="btn btn-danger" value="Delete" name="delete_job">
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
                    <form action="./new_job.php" method="POST" > 
                        <input type="submit" style="width:12em; " class="btn btn-info" name="addNewJob" value="Add New Job?">
                    </form>
                </td>
                <td class="hiding ">
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