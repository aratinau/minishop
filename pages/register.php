<?php
require('../config.php');
require('../init.php');
if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty(($_POST["email"]) && !empty($_POST["password"]))) {
		$firstname = htmlspecialchars($_POST["firstname"]);
		$email = htmlspecialchars($_POST["email"]);
		$password = htmlspecialchars($_POST["password"]);
        $sql = "INSERT INTO users (firstname, email, password) VALUES (?,?,?)";
        $stmt= $dbh->prepare($sql);
        $stmt->execute([$firstname, $email, $password]);
		header('Location: /pages/register.php');
    }
}
require('../header.php'); ?>
<h1>Register</h1>
<form action="/pages/register.php" method="post">
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email">
  </div>
  <div class="form-group">
    <label for="inputFirsname">Firstname</label>
    <input type="text" class="form-control" id="inputFirstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require('../footer.php'); ?>
