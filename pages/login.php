<?php
require('../config.php');
require('../init.php');

if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty(($_POST["email"]) && !empty($_POST["password"]))) {

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
