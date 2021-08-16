<?php $title= "Permissions Updateds"; include "./inc/head.php"; ?>
<?php 
if(!$_SESSION["permissions_ctrl"]){
    header("Location: ./home.php");
}

?>


<div class="container login-container">
    <span <?php ?> class="container mian-slogan"> <h1 class="btn-outline-danger">Permissions Have Been Updated Successfully.</h1> <hr> <h2> Do You Like To Change More Permissions?</h2></span><br>
<div class="list-of-content" >
        <table>
                <?php   
                    include './inc/db.php';
                    $result = $con-> query ( "SELECT * FROM jobs WHERE is_job_active=1"); 
                    while($row = $result -> fetch_assoc()):
                ?>
            <tr class="table-row">
                <td class="hiding"> <?php $_SESSION['jidPermChng'] =$row['jid']; echo $_SESSION['jidPermChng'] ?> </td>
                <td class="hiding"> <?php $_SESSION['title-perm-chng']=$row['title']; echo $_SESSION['title-perm-chng'] ?>  </td>
                <form action="./change_permissions.php" method="POST">
                <td class="table-cell"> 
                    <input type="submit" style="width:12em;" class="btn btn-success" name="chngPermBtn" value="<?php echo  $_SESSION['title-perm-chng'] ?>">
                    <input type="submit" style="width:4.2em;" class="btn btn-danger" name="delete" value="Delete ">
                </td>
                <td class="hiding ">
                    <input class="hiding" type="text" name="jid-for-chng" value="<?php echo $_SESSION['jidPermChng'];?>"> 
                </td>
                </form>
            </tr>
                <?php 
                    endwhile; 
                ?>
                <tr class="table-row">
                <td class="hiding">  </td>
                <td class="hiding">   </td>
                <form action="./permissions.php" method="POST"></form>
                <td class="table-cell" style="height: 7em;">
                    <form action="" method="POST" > 
                        <input type="submit" style="width:12em;" class="btn btn-danger" name="addNewJob" value="Add New Job?">
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