@extends('layout')

@section('title', 'Mobly')

@section('content')

<h3><?= $category->name ?></h3>

<div class="products">
	<ul class="product-list">
	<?  foreach ($category->products as $product): ?>
		<li>
			<form action="<?= url('addtocart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
				<span class="title"><a href="<?= url('product', ['id' => $product->id]) ?>"><?= $product->name ?></a>: <?= $product->description ?></span>
				<span><?= $product->price ?> R$</span>
				<span class="action"></span><input type="submit" value="add to cart"></span>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" name="product_id" value="<?= $product->id?>">
			</form>
		</li>
	<? endforeach ?>
	</ul>
</div>

@stop
