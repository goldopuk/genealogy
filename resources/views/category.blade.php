@extends('layout')

@section('title', 'Mobly')

@section('content')

<h1><a href="<?= url('home') ?>">Shop Mobly</a> > <?= $category->name ?></h1>

<div class="products">
	<h2>Products</h2>
	<ul>
	<?  foreach ($category->products as $product): ?>
		<li>
			<form action="<?= url('addtocart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
				<a href="<?= url('product', ['id' => $product->id]) ?>"><?= $product->name ?></a>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" name="product_id" value="<?= $product->id?>">
				<input type="submit" value="add to cart"></input>
			</form>
		</li>
	<? endforeach ?>
	</ul>
</div>

