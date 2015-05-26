@extends('layout')

@section('title', 'Mobly')

@section('content')

<h1><a href="<?= url('home') ?>">Shop Mobly</a> > search</h1>
<div>
	<?= count($products) ?> product(s) found.
</div>
<div class="products">
<?  foreach ($products as $product): ?>
	<li>
		<form action="<?= url('addtocart') ?>" method="POST" enctype="application/x-www-form-urlencoded">
			<?= $product->name ?>

			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="product_id" value="<?= $product->id?>">
			<input type="submit" value="add to cart"></input>
		</form>
	</li>
<? endforeach ?>
</div>



	
@stop



