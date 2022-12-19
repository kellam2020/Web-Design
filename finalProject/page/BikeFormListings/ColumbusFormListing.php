
<head>
<link rel="stylesheet" href="../../include/FinalHomePageLook.css">
    <style>
        .div {
            background-color: #595959;
        }
    </style>
</head>
<body class="green">
<?php
include("../../include/FormNavbar.php");
include("../../include/EditDataBase.php"); 
$forms = ColumbusBikeSite::getFormsFromDb($conn);

if (!isset($_SESSION['username'])) {
  header("Location: ../BikeSite404.php");
}

?><br>

<div class="container">
    <div class="row">
    <div class="d-flex justify-content-center">
      <a class='btn btn-success' href='../BikeForms/ColumbusForm.php'>Create New Review</a>
    </div>
  </div><br>
<?php
      foreach ($forms as $form) {
	  $formId = $form->formId;
  ?>
    <div class="row">
       
          <div class="row">
            <div class="col-12 col-md-7 " >
                 
                <div class="bg-dark">
                
                    <span><strong><?php echo "Title: ";?></strong><?php echo  $form->title; ?></span>
                </div>
                <div class="div">
                    <span><strong><?php echo "Review: ";?></strong><?php echo $form->review ?></span>
                </div><br>    
               </div>
            </div>
      
    </div>
  <?php
    }
  ?>
</div>
</body> 

