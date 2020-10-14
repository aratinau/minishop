<?php
require('../config.php');
require('../init.php');

if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty(($_POST["email"]) && !empty($_POST["password"]))) {
		$email = htmlspecialchars($_POST["email"]);
		$password = htmlspecialchars($_POST["password"]);
        $stmt = $dbh->prepare("SELECT * FROM users WHERE email = ?");
		$stmt->execute([$email]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $result["password"])) {
            unset($result["password"]);
            $_SESSION["user"] = $result;
			$_SESSION["message"]["type"] = "success";
			$_SESSION["message"]["content"] = "Vous êtes connecté";
        }
        else
        {
			$_SESSION["message"]["type"] = "danger";
			$_SESSION["message"]["content"] = "Mauvais mot de passe ou email";
        }
    }
}
?>
<?php require('../header.php'); ?>
<h1>Login</h1>
<form action="<?php echo NAME_FOLDER_PROJECT; ?>/pages/login.php" method="post">
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require('../footer.php'); ?>
