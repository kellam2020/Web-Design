<?php
include("../include/BikeNavbar.php");
$name = $username = $password = "";
$passwordErr = $usernameErr = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_input($_POST["name"]);
    $username = clean_input($_POST["username"]);
    $password1 = clean_input($_POST["password1"]);
    $password2 = clean_input($_POST["password2"]);
 
    if ($password1 !== $password2) {
      $password = "";
      $passwordErr = "Passwords must match";
    } else {
      $password = password_hash($password1, PASSWORD_DEFAULT);
    }
    $usernameErr = checkUsernameIsUnique($username);
    
    if (empty($passwordErr) && empty($usernameErr)) {
      addUser($name, $username, $password);
    }
}

function checkUsernameIsUnique($username) {
  $conn = connect_to_db("finalProjectTyler");
  $selectUser = "SELECT username FROM users WHERE username=:username";
  $stmt = $conn->prepare($selectUser);
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return empty($stmt->fetchAll()) ? "" : "Username is already taken";
}

 
function addUser($name, $username, $password) {
    $conn = connect_to_db("finalProjectTyler");
    $insert = "INSERT INTO users (fullName, username, userPassword)
    VALUES (:name, :username, :password)";
    $stmt = $conn->prepare($insert);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
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
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <span class="error">* <?php echo $usernameErr;?></span><br>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <span class="error">* <?php echo $passwordErr;?></span><br>
                    <input type="password" class="form-control" name="password1" id="password1" required>
                </div>
                <div class="form-group">
                    <label for="password2">Repeat Password</label>
                    <span class="error">* <?php echo $passwordErr;?></span><br>
                    <input type="password" class="form-control" name="password2" id="password2" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>