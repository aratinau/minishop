<?php

require('../config.php');
require('../init.php');
require('../header.php');

// calcul prix total
$total = 0;
foreach ($_SESSION["cart"] as $product)
{
    $total += $product["quantity"] * $product["price"];
}

?>
<h1>Panier</h1>
<h2>Total <?php echo $total; ?>€</h2>
<div class="row">
<?php

foreach ($_SESSION["cart"] as $product)
{
?>
	<div class="col-lg-4">
		<h1><?php echo $product["name"]; ?></h1>
		<div>
			<img src="<?php echo $product["img"]; ?>" />
			<p><?php echo $product["description"]; ?>
            <p>quantity: <?php echo $product["quantity"]; ?></p>
            <p>total: <?php echo $product["quantity"] * $product["price"]; ?>€</p>
		</div>
    </div>
<?php
}
?>
</div>
<?php
require('../footer.php'); ?>
