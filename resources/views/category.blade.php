@extends('layout')

@section('title', 'Mobly')

@section('content')

<h3><?= $category->name ?></h3>

<div class="products">
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

@stop
