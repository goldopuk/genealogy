@extends('layout')

@section('title', 'Mobly')

@section('content')

<h3>search: <?= count($products) ?> product(s) found.</h3>

<div class="products">
	<ul class="product-list">
	<? foreach ($products as $product): ?>
			<li>
				<form action="<?= url('addtocart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
					<span class="title"><a href="<?= url('product', ['id' => $product->id]) ?>"><?= $product->name ?></a>: <?= $product->description ?></span>

					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input type="hidden" name="product_id" value="<?= $product->id?>">
					<input type="submit" value="add to cart"></input>
				</form>
			</li>
		</ul>
	<? endforeach ?>
</div>

@stop
