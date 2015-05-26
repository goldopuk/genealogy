@extends('layout')

@section('title', 'Mobly')

@section('content')

	<h1><a href="<?= url('home') ?>">Shop Mobly !!</a></h1>
	
	<form action="<?= url('search') ?>" method="GET">
		<input type="search" name="s" value="" placeholder="search">
		<input type="submit" value="search"></input>
	</form>

	<div class="cart">
		<?
		$cart = \Mobly\Cart::getInstance();
		?>

		You have <?= count($cart->getProducts()) ?> product(s) in <a href="<?= url('showcart')?>">your cart.</a>
	</div>

	<div class="categories">
		<h2>Categories</h2>
		<ul>
		<?  foreach ($categories as $cat): ?>
			<li>
				<a href="<?= url('category', ['id' => $cat->id]) ?>"><?= $cat->name ?></a>
			</li>
		<? endforeach ?>
		</ul>
	</div>
	
@stop

   