<?php
require('../config.php');
require('../init.php');
if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty(($_POST["email"]) && !empty($_POST["password"]))) {
		$firstname = htmlspecialchars($_POST["firstname"]);
		$email = htmlspecialchars($_POST["email"]);
		$password = htmlspecialchars($_POST["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);
		// verifie si l'adresse email est déjà présente dans la base de donnée
		$stmt = $dbh->prepare("SELECT COUNT(*) AS count_email FROM users WHERE email = ?");
		$stmt->execute([$email]);
		$result = $stmt->fetch();
		$count_email = $result["count_email"];
		if($count_email == 0) {
			// créé le nouvel utilisateur
			$sql = "INSERT INTO users (firstname, email, password) VALUES (?,?,?)";
			$stmt= $dbh->prepare($sql);
			$stmt->execute([$firstname, $email, $password]);
			$_SESSION["message"]["type"] = "success";
			$_SESSION["message"]["content"] = "Vous avez bien été enregistré";
		} else {
			$_SESSION["message"]["type"] = "danger";
			$_SESSION["message"]["content"] = "Adresse email deja utilisé";
		}
    }
}
require('../header.php'); ?>
<h1>Register</h1>
<form action="<?php echo NAME_FOLDER_PROJECT; ?>/pages/register.php" method="post">
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
