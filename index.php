<?php
session_start();

require('config.php');
require('init.php');
require('header.php');
?>
	<h1>Mini Shop</h1>
	<div class="row">
      <div class="col-lg-4">
        <h2>Heading</h2>
		<img src="https://loremflickr.com/g/350/260/product" />
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
    </div>
<?php require('footer.php'); ?>
