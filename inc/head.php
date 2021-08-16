<?php
session_start();
 //redirecting illeagele access 
if($_SESSION["is_active"]==0){
    header("Location: ./index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./rsc/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/047f6b975f.js" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
</head>
<body>
<nav  class="navbar navbar-expand-sm navbar-light lg-light main-nav"  >
    <div class="nav-spacing" ></div>
  <a class="navbar-brand" href="./home.php"><?php echo "Hi ".$_SESSION["fname"].", ". $_SESSION["title"]. $_SESSION['jid']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <form class="navbar-nav" action="./signout.php" method="POST">
        <a class="nav-item nav-link active" href="./home.php"> Home  <span class="sr-only">(current)</span></a>
        <?php 
        if($_SESSION['jid']==1){
            echo '<a class="nav-item nav-link active" href="./permissions.php">Permessions</a>';
        }
        ?>
        <a class="nav-item nav-link active" href="#">Profile </a>
        <a class="nav-item nav-link active " href="#">Help</a>
        <input type="submit" class="btn btn-outline-dark " value="Signout">
      </form>
    </div>
  </div>
</nav>