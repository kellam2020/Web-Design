 
<?php
 
include("ConnectToDataBase.php");
$conn = connect_to_db("finalProjectTyler");
session_start();
?><head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link href="https://startbootstrap.github.io/startbootstrap-clean-blog/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="../include/FinalHomePageLook.css">
  
</head>








<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../page/homepage.php">City Bike-ways</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
       <?php if (isset($_SESSION['username'])) { ?>
           
          <li class="nav-item">
            <a class="nav-link" href="../page/columbus.php">Columbus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/upperArlingtonBikeways.php">Upper Arlington</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/DublinBikeways.php">Dublin</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../page/WestervilleBikeways.php">Westerville</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/WorthingtonBikeways.php">Worthington</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../include/bikelogout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/userHomePage.php">Write A Review</a>
          </li>
        <?php } else { ?>
           
           
          <li class="nav-item">
            <a class="nav-link" href="../page/columbus.php">Columbus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/upperArlingtonBikeways.php">Upper Arlington</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/DublinBikeways.php">Dublin</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../page/WestervilleBikeways.php">Westerville</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/WorthingtonBikeways.php">Worthington</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../page/bikeSignUp.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/bikelogin.php">Login</a>
          </li>
        <?php }   ?>
          
          </ul>    
    </div>
	</div>
</nav>
 