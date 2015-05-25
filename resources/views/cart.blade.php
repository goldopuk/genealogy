<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">
<title>Mobly shop</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body>
<h1>Shop Mobly -> in your cart</h1>

<div class="cart">
	<?
	$cart = \Mobly\Cart::getInstance();
	?>

	You have <?= count($cart->getProducts()) ?> product(s) </a>
</div>

<div class="categories">
<?  foreach ($cart->getProducts() as $product): ?>
	<li>
		<form action="<?= url('product/remove') ?>" method="POST" enctype="application/x-www-form-urlencoded">
		<?= $product->name ?>

			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="product_id" value="<?= $product->id?>">
			<input type="submit" value="remove from cart"></input>
		</form>
	</li>
<? endforeach ?>
</div>



</body>

</html>