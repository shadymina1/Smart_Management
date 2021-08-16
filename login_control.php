<?php 
if(isset($_POST["login"])){
    session_start();
    $_SESSION["loged_email"]=$_POST["loged_email"];
    $_SESSION["loged_pass"]= md5($_POST["loged_pass"]);
    include "./inc/db.php";
    $select="SELECT * FROM employee
    INNER JOIN jobs ON employee.jid=jobs.jid 
    AND 
    emEmail='{$_SESSION["loged_email"]}' 
    AND 
    emPass='{$_SESSION["loged_pass"]}';
    ";
    $checkLogIn= $con-> query($select);
    if($checkLogIn ->num_rows> 0){
        echo "record/s found! ";
        $gettingData= ($checkLogIn->fetch_assoc());
        $_SESSION["is_active"]=$gettingData['is_active'];
        $_SESSION["is_job_active"]=$gettingData['is_job_active'];
        if($_SESSION["is_active"] && $_SESSION["is_job_active"] ){
            //echo "<br> <hr> you are still working";
            include "./temp_sessions_ref.php";
            //echo $_SESSION["title"];
            header("Location: ./home.php?{$_SESSION["title"]}");
        }else{
            $_SESSION["loginMessage"]= "Your account has been suspended. <br> Please contact the management.</hr>";
            include "./clear_permessions.php";
            header("Location: ./index.php?suspended");
        }
    }else{
        $_SESSION["loginMessage"]= "The email and password are not matching. <br> Please check and try again.<hr>";
        header("Location: ./index.php?NOTmatching");
    }
}
?>





<?php include "./inc/footer.php"; ?> 