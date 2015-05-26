@extends('layout')

@section('title', 'Mobly')

@section('content')

<div class="product">
	<h3>Product <?= $product->name ?></h3>

	<p>
		<?= $product->description ?>
	</p>
	<p>
		<?= $product->price ?> R$
	</p>
	<img src="<?= $product->image ?>">

	<form action="<?= url('addtocart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="hidden" name="product_id" value="<?= $product->id?>">
		<input type="submit" value="add to cart"></input>
	</form>
</div>

@stop
