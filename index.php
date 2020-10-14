<?php
session_start();

require('config.php');
require('init.php');
require('header.php');
?>
	<h1>Mini Shop</h1>
	<?php 
		foreach($dbh->query('SELECT * from products') as $row) {
			echo '<pre>';
			print_r($row);
			echo '<pre>';
		}
	?>
<?php require('footer.php'); ?>
