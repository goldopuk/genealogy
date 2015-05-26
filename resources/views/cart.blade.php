@extends('layout')

@section('title', 'Mobly')

@section('content')

<h3>Your cart</h3>

<? $cart = \Mobly\Cart::getInstance(); ?>

<div class="categories">
	<ul class="product-list">
	<?  foreach ($cart->getProducts() as $product): ?>
		<li>
			<form action="<?= url('removefromcart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
				<span class="title"><a href="<?= url('product', ['id' => $product->id]) ?>"><?= $product->name ?></a>: <?= $product->description ?></span>

				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" name="product_id" value="<?= $product->id?>">
				<input type="submit" value="remove from cart"></input>
			</form>
		</li>
	<? endforeach ?>
	</ul>
</div>

<a href="<?= url('checkout') ?>">Checkout</a>

@stop



