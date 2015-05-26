@extends('layout')

@section('title', 'Mobly')

@section('content')

<h1><a href="<?= url('home') ?>">Shop Mobly</a> > Product > <?= $product->name ?></h1>

<div class="product">
	<h2>Products</h2>
	
	<?= $product ?>
	
	<form action="<?= url('addtocart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="hidden" name="product_id" value="<?= $product->id?>">
		<input type="submit" value="add to cart"></input>
	</form>
</div>

