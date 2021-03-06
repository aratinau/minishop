<!doctype html>
<html lang="en" class="">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>Mini Shop</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>
	<body class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                  <a class="navbar-brand" href="<?php echo NAME_FOLDER_PROJECT; ?>/index.php">MiniShop</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                      <a class="nav-link" href="<?php echo NAME_FOLDER_PROJECT; ?>/index.php">Home</a>
                      </li>
                        <?php if (isset($_SESSION["user"])) { ?>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo NAME_FOLDER_PROJECT; ?>/pages/logout.php">Logout</a>
                          </li>
                        <?php } else { ?>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo NAME_FOLDER_PROJECT; ?>/pages/login.php">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo NAME_FOLDER_PROJECT; ?>/pages/register.php">Register</a>
                          </li>
                        <?php } ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo NAME_FOLDER_PROJECT; ?>/pages/cart.php">Panier</a>
                        </li>
                    </ul>
                  </div>
            </div>
        </nav>
        <div class="container">
			<?php if (isset($_SESSION["message"])) : ?>
			<div class="alert alert-<?php echo $_SESSION["message"]["type"]; ?>" role="alert">
				<?php
					echo $_SESSION["message"]["content"];
					unset($_SESSION["message"]);
				?>
			</div>
			<?php endif; ?>
<?php
// debug cart
// var_dump($_SESSION["cart"]);
?>
