<?php
require('../config.php');
require('../init.php');
if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty(($_POST["email"]) && !empty($_POST["password"]))) {
		$firstname = htmlspecialchars($_POST["firstname"]);
		$email = htmlspecialchars($_POST["email"]);
		$password = htmlspecialchars($_POST["password"]);
		// verifie si l'adresse email est déjà présente dans la base de donnée
		$query_count_email = "SELECT * from users";
		$request = $dbh->query($query_count_email);
		$result = $request->fetchAll(PDO::FETCH_ASSOC);
		$count = count($result);
		if($count === 0) {
			// créé le nouvel utilisateur
			$sql = "INSERT INTO users (firstname, email, password) VALUES (?,?,?)";
			$stmt= $dbh->prepare($sql);
			$stmt->execute([$firstname, $email, $password]);
			header('Location: /pages/register.php');
		} else {
			$_SESSION["message"]["type"] = "danger";
			$_SESSION["message"]["content"] = "Adresse email deja utilisé";
		}
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
