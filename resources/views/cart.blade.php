@extends('layout')

@section('title', 'Mobly')

@section('content')

<h1><a href="<?= url('home') ?>">Shop Mobly</a> > cart</h1>

<div class="cart">
	<?
	$cart = \Mobly\Cart::getInstance();
	?>

	You have <?= count($cart->getProducts()) ?> product(s) in your cart...</a>
</div>

<div class="categories">
<?  foreach ($cart->getProducts() as $product): ?>
	<li>
		<form action="<?= url('removefromcart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
			<?= $product->name ?>

			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="product_id" value="<?= $product->id?>">
			<input type="submit" value="remove from cart"></input>
		</form>
	</li>
<? endforeach ?>
</div>



	
@stop



