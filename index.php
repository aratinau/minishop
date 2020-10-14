<?php

require('config.php');
require('init.php');
require('header.php');
?>
<div class="row">
<?php

$stmt = $dbh->prepare("SELECT * FROM products");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $product)
{
?>
	<div class="col-lg-4">
		<h1><?php echo $product["name"]; ?></h1>
		<div>
			<img src="<?php echo $product["img"]; ?>" />
			<p><?php echo $product["description"]; ?>
			<p><a class="btn btn-secondary" href="<?php echo NAME_FOLDER_PROJECT; ?>/add-to-cart.php?id_product=<?php echo $product["id"]; ?>" role="button">Ajouter au panier</a></p>
		</div>
    </div>
<?php
}
?>
</div>
<?php
require('footer.php'); ?>
