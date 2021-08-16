<?php $title= "Home"; include "./inc/head.php"; ?>


<div class="container">
    <h1 style="text-align: center; margin-top:2em;"> <?php echo "Hello ".$_SESSION["fname"].", ". "We are ready for your instructions"  ?> </h1>
    <br >
    <hr style="width: 10em; margin-bottom:4em;">
    <!-- <img src="./img/banner.svg" class="banner" width="30%" alt=""> -->

</div>
<div class="taps-container container"> <!-- Starting panel Taps -->
<?php  //permissions tap
        if( $_SESSION["permissions_ctrl"]){
            include "./inc/taps/permissions_tap.php";
        }
     //Employees tap
        if( $_SESSION["emp_main_read"]){
            include "./inc/taps/employees_tap.php";
        }
     //Quotaions tap
        if( $_SESSION["q_read"]){
            include "./inc/taps/quotations_tap.php";
        }
      //Invoices tap 
        if( $_SESSION["inv_read"]){
            include "./inc/taps/inv_tap.php";
        }
     //Clients tap
        if( $_SESSION["client_read"]){
            include "./inc/taps/clints_tap.php";
        }
      //Stock.Products tap
        if( $_SESSION["prod_create"]){
            include "./inc/taps/stock_tap.php";
        }
      //Suppliers tap 
        if( $_SESSION["sup_read"]){
            include "./inc/taps/suppliers_tap.php";
        }
      
    ?>
</div> <!-- End of panel Taps -->
<div <?php echo "style='display: none;'" ?>  > 
    <h1   > It is a PHP test</h1>
</div>




<?php include "./inc/footer.php" ;?> 

