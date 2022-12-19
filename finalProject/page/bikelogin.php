
 
 
<?php
include("../include/BikeNavbar.php");

$name = $username = $password = "";
$passwordErr = $usernameErr = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = clean_input($_POST["username"]);
  $password = clean_input($_POST["password"]);

  if (!empty($username) && !empty($password)) {
    $usernameErr = verifyUser($username);
    $passwordErr = verifyPassword($username, $password);
   if (empty($usernameErr) && empty($passwordErr)) {
      login($username);
    }
   
  }
}

function login($username) {
  //session_start();
  $_SESSION['username'] = $username;
  $_SESSION['userId'] = getUserId($username);
  header("Location: userHomePage.php");
}

function verifyPassword($username, $password) {
  $conn = connect_to_db("cms");
  $selectUser = "SELECT username, userPassword FROM users WHERE username=:username";
  $stmt = $conn->prepare($selectUser);
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $listRow) {
    $hashedPassword = $listRow['userPassword'];
      if (!password_verify($password, $hashedPassword)) {
      return "Incorrect password";
    }

  }
}



function verifyUser($username) {
  $conn = connect_to_db("finalProjectTyler");
  $selectUser = "SELECT username FROM users WHERE username=:username";
  $stmt = $conn->prepare($selectUser);
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return empty($stmt->fetchAll()) ? "Username does not exist" : "";
}
?>

<style>
    .error {color: #FF0000;}
</style>
<div class='userLoginForm container'>
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <span class="error">* <?php echo $usernameErr;?></span><br>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <span class="error">* <?php echo $passwordErr;?></span><br>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
