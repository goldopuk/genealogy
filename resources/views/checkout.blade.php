@extends('layout')

@section('title', 'Mobly')

@section('content')

<? $cart = \Mobly\Cart::getInstance(); ?>

<h3>checkout</h3>

<p>Total: <?= $cart->getTotal() ?> R$</p>


<form action="<?= url('saveorder') ?>" method="POST" enctype="application/x-www-form-urlencoded">
	<h4>Personal data</h4>
	<ul>
		<li><label>Full name</label><input type="text" name="fullname"></li>
		<li><label>Email</label><input type="email" name="email"></li>
	</ul>
	<h4>Invoice address</h4>
	<ul>
		<li><label>Address</label><input type="text" name="invoice_address"></li>
		<li><label>Zip code</label><input type="text" name="invoice_zip"></li>
		<li><label>City</label><input type="text" name="invoice_city"></li>
		<li><label>Country</label><input type="text" name="invoice_country"></li>
	</ul>

	<h4>Delivery address</h4>
	<ul>
		<li><label>Address</label><input type="text" name="delivery_address"></li>
		<li><label>Zip code</label><input type="text" name="delivery_zip"></li>
		<li><label>City</label><input type="text" name="delivery_city"></li>
		<li><label>Country</label><input type="text" name="delivery_country"></li>
	</ul>

	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	
	<input type="submit" value="checkout"></input>
</form>
@stop

