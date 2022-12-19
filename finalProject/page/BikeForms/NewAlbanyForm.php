<head>
    <link rel="stylesheet" href="../../include/FinalHomePageLook.css">
</head>
<body class="green">

<?php
include("../../include/FormNavbar.php");
include("../../include/EditDataBase.php"); 




if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  $title = clean_input($_POST["title"]);
  $review = clean_input($_POST["review"]);
   
 if (!empty($title) && !empty($review)) {
    $user = $_SESSION['userId'];
    $publishDate = date('Y-m-d');

    $FormInfo = array(
      "formId" => "",
      "title" => $title,
      "review" => $review,
      "user" => $user,
      "publishDate" => $publishDate
    ); 
      


 
    $form = new NewAlbanyBikeSite($conn, $FormInfo);
    $form->form();
     
    header("Location: ../BikeFormListings/NewAubanyBikeFormListing.php");
  }
}

 

?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Make sure to add "enctype" below for pictures-->
      <form enctype="multipart/form-data" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="title">Title</label>
          <span class="error">*<br>
          <input type="text" class="form-control" name="title" id="title"  required>
        </div>
            
        <div class="form-group">
          <label for="review">Review</label>
          <span class="error">*</span><br>
          <textarea rows="10" class="form-control" name="review" id="review" autocomplete="on" placeholder=" " required></textarea>
        </div><br>
            <center><input type="submit" class="btn btn-primary" value="Submit"></center>
    </form>    
    </div>
  </div>
</div>
    </body>
        