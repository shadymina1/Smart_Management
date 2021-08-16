<?php $title= "Permissions change"; include "./inc/head.php"; ?>
<?php 

if(!$_SESSION["permissions_ctrl"]){
    header("Location: ./home.php");
}


if(isset($_POST["chngPermBtn"])){
    $_SESSION['jidPermChng']=$_POST['jid-for-chng'];
    include "./inc/db.php";
    $result = $con-> query ( "SELECT * FROM jobs WHERE jid='{$_SESSION['jidPermChng']}'"  ); 
    if($result ->num_rows> 0){
        $row= ($result->fetch_assoc());
        $jid= $row['jid'];
        $title=$row['title'];
        $q_create= $row["q_create"];
        $q_read= $row['q_read'];
        $q_update= $row['q_update'];
        $q_delete= $row['q_delete'];
        $inv_read = $row['inv_read'];
        $inv_issue = $row['inv_issue'];
        $inv_cancel = $row['inv_cancel'];
        $emp_create = $row['emp_create'];
        $emp_main_read = $row['emp_main_read'];
        $emp_wage_read = $row['emp_wage_read'];
        $emp_is_active = $row['emp_is_active'];
        $emp_update = $row['emp_update'];
        $prod_create = $row['prod_create'];
        $prod_main_read = $row['prod_main_read'];
        $prod_cost_read = $row['prod_cost_read'];
        $prod_mainx_update = $row['prod_mainx_update'];
        $prod_active_delete = $row['prod_active_delete'];
        $client_create = $row['client_create'];
        $client_read = $row['client_read'];
        $client_main_update = $row['client_main_update'];
        $client_active_update = $row['client_active_update'];
        $client_delete = $row['client_delete'];
        $sup_create = $row['sup_create'];
        $sup_read = $row['sup_read'];
        $sup_main_update = $row['sup_main_update'];
        $sup_is_active = $row['sup_is_active'];
        $sup_delete = $row['sup_delete'];
    }
}

//Next : redirecting to permissinos page with the notification,
//The perpose is to avoid loading the page permissions.php without the variabls.
// the page will load the variables only when  $_POST["chngPermBtn"] is set.
if(isset($_POST["submitChngs"])){ 
    header("Location: ./permissions.php");
  }

?>
<div class="container login-container">
    <h3 class="container mian-slogan"> Make changes for <span class="btn-warning" ><?php echo $title; ?></span> , and then click "save"</h3><br>
    <div>
          <form action="./change_permissions.php" method="POST">
                <div class="datashow">
                    Job Title <input type="text" name="titleToBeChanged" value= "<?php echo $title?>"><hr class="btn-info" >
                    	Creat Quotation	<input type="checkbox" name="q_createChng" value='1'<?php if($q_create){ $checkbox="checked"; echo $checkbox;}?>>  	<hr>
                    	Read Quotation	<input type="checkbox" name="q_readChng" value='1'<?php if($q_read){ $checkbox="checked"; echo $checkbox;}?>>   	<hr>
                    	Update Quotation	<input type="checkbox" name="q_updateChng" value='1'<?php if($q_update){ $checkbox="checked"; echo $checkbox;}?>>   	<hr>
                    	Delete Quotation	<input type="checkbox" name="q_deleteChng" value='1'<?php if($q_delete){ $checkbox="checked"; echo $checkbox;}?>> 	<hr>
                    	Read Invoice	<input type="checkbox" name="inv_readChng" value='1'<?php if($inv_read){ $checkbox="checked"; echo $checkbox;}?>> 	<hr>
                    	Issue Invoic	<input type="checkbox" name="inv_issueChng" value='1'<?php if($inv_issue){ $checkbox="checked"; echo $checkbox;}?>> 	<hr>
                    	Cancel Invoice	<input type="checkbox" name="inv_cancelChng" value='1'<?php if($inv_cancel){ $checkbox="checked"; echo $checkbox;}?>> 	<hr>
                    	Creat Employee	<input type="checkbox" name="emp_createChng" value='1'<?php if($emp_create){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Read Employee info	<input type="checkbox" name="emp_main_readChng" value='1'<?php if($emp_main_read){ $checkbox="checked"; echo $checkbox;}?>> 	<hr>
                    	Read Employee Wage	<input type="checkbox" name="emp_wage_readChng" value='1'<?php if($emp_wage_read){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Activate or Deactivate Employee	<input type="checkbox" name="emp_is_activeChng" value='1'<?php if($emp_is_active){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Update Employee Info	<input type="checkbox" name="emp_updateChng" value='1'<?php if($emp_update){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Create New Product	<input type="checkbox" name="prod_createChng" value='1'<?php if($prod_create){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Read Product Main Info	<input type="checkbox" name="prod_main_readChng" value='1'<?php if($prod_main_read){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Read Product Cost  Info	<input type="checkbox" name="prod_cost_readChng" value='1'<?php if($prod_cost_read){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Update Product Info	<input type="checkbox" name="prod_mainx_updateChng" value='1'<?php if($prod_mainx_update){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Activate - Deactivate - Delete Product	<input type="checkbox" name="prod_active_deleteChng" value='1'<?php if($prod_active_delete){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Creat Client	<input type="checkbox" name="client_createChng" value='1'<?php if($client_create){ $checkbox="checked"; echo $checkbox;}?>> </form>	<hr>
                    	Read Client Info	<input type="checkbox" name="client_readChng" value='1'<?php if($client_read){ $checkbox="checked"; echo $checkbox;}?>> </form>	<hr>
                    	Update Client  Info	<input type="checkbox" name="client_main_updateChng" value='1'<?php if($client_main_update){ $checkbox="checked"; echo $checkbox;}?>> 	<hr>
                    	Activate/Deactivat Client	<input type="checkbox" name="client_active_updateChng" value='1'<?php if($client_active_update){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Delete Client 	<input type="checkbox" name="client_deleteChng" value='1'<?php if($client_delete){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Creat Supplier 	<input type="checkbox" name="sup_createChng" value='1'<?php if($sup_create){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Read Supplier Info	<input type="checkbox" name="sup_readChng" value='1'<?php if($sup_read){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Update Suplier Info	<input type="checkbox" name="sup_main_updateChng" value='1'<?php if($sup_main_update){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Activate/Deactivat Supplier	<input type="checkbox" name="sup_is_activeChng" value='1'<?php if($sup_is_active){ $checkbox="checked"; echo $checkbox;}?>>	<hr>
                    	Delete Supplier	<input type="checkbox" name="sup_deleteChng" value='1'<?php if($sup_delete){ $checkbox="checked"; echo $checkbox;}?>> <hr>
                    <input type="submit"  class="btn btn-danger" name="submitChngs" value="Save">
                </div>
          </form>
          <?php 
          if(isset($_POST["submitChngs"])){
            $titleToBeChanged=$_POST["titleToBeChanged"];
            $q_createChng=$_POST['q_createChng'];
            $q_readChng=$_POST['q_readChng'];
            $q_updateChng=$_POST['q_updateChng'];
            $q_deleteChng=$_POST['q_deleteChng'];
            $inv_readChng=$_POST['inv_readChng'];
            $inv_issueChng=$_POST['inv_issueChng'];
            $inv_cancelChng=$_POST['inv_cancelChng'];
            $emp_createChng=$_POST['emp_createChng'];
            $emp_main_readChng=$_POST['emp_main_readChng'];
            $emp_wage_readChng=$_POST['emp_wage_readChng'];
            $emp_is_activeChng=$_POST['emp_is_activeChng'];
            $emp_updateChng=$_POST['emp_updateChng'];
            $prod_createChng=$_POST['prod_createChng'];
            $prod_main_readChng=$_POST['prod_main_readChng'];
            $prod_cost_readChng=$_POST['prod_cost_readChng'];
            $prod_mainx_updateChng=$_POST['prod_mainx_updateChng'];
            $prod_active_deleteChng=$_POST['prod_active_deleteChng'];
            $client_createChng=$_POST['client_createChng'];
            $client_readChng=$_POST['client_readChng'];
            $client_main_updateChng=$_POST['client_main_updateChng'];
            $client_active_updateChng=$_POST['client_active_updateChng'];
            $client_deleteChng=$_POST['client_deleteChng'];
            $sup_createChng=$_POST['sup_createChng'];
            $sup_readChng=$_POST['sup_readChng'];
            $sup_main_updateChng=$_POST['sup_main_updateChng'];
            $sup_is_activeChng=$_POST['sup_is_activeChng'];
            $sup_deleteChng=$_POST['sup_deleteChng'];
            include "./inc/db.php";
            $updatingsql = ("UPDATE jobs SET 
                title    = '$titleToBeChanged',
                q_create	=	'$q_createChng',
                q_read	=	'$q_readChng',
                q_update	=	'$q_updateChng',
                q_delete	=	'$q_deleteChng',
                inv_read	=	'$inv_readChng',
                inv_issue	=	'$inv_issueChng',
                inv_cancel	=	'$inv_cancelChng',
                emp_create	=	'$emp_createChng',
                emp_main_read	=	'$emp_main_readChng',
                emp_wage_read	=	'$emp_wage_readChng',
                emp_is_active	=	'$emp_is_activeChng',
                emp_update	=	'$emp_updateChng',
                prod_create	=	'$prod_createChng',
                prod_main_read	=	'$prod_main_readChng',
                prod_cost_read	=	'$prod_cost_readChng',
                prod_mainx_update	=	'$prod_mainx_updateChng',
                prod_active_delete	=	'$prod_active_deleteChng',
                client_create	=	'$client_createChng',
                client_read	=	'$client_readChng',
                client_main_update	=	'$client_main_updateChng',
                client_active_update	=	'$client_active_updateChng',
                client_delete	=	'$client_deleteChng',
                sup_create	=	'$sup_createChng',
                sup_read	=	'$sup_readChng',
                sup_main_update	=	'$sup_main_updateChng',
                sup_is_active	=	'$sup_is_activeChng',
                sup_delete	=	'$sup_deleteChng'
            WHERE jid='{$_SESSION['jidPermChng']}'");
            if($con->query($updatingsql)===true){       
                header("Location: ./home.php");
                $updateDone= "Updat Done! ";// debugging
            }else{
                $updateDone= "update faild";      // debugging
            }
        }
        ?>
   </div>
<?php  if(isset($updateDone)) {
                   
    echo $updateDone;

    if(isset($_POST["submitChngs"])){
        header("Location: ./home.php");
    }
    }?>
</div>

<?php // echo $_SESSION['jidPermChng']; echo $title;  echo $q_create ;echo $q_createChng;?>
<?php    include "./inc/footer.php" ;?>