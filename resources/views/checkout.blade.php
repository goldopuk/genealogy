@extends('layout')

@section('title', 'Mobly')

@section('content')

<? $cart = \Mobly\Cart::getInstance(); ?>

<h3>checkout</h3>

<p>Total: <?= $cart->getTotal() ?> R$</p>


<form action="<?= url('saveorder') ?>" method="POST" enctype="application/x-www-form-urlencoded">
	<h4>Personal data</h4>
	<ul>
		<li><label>Full name</label><input type="text" name="form[fullname]"></li>
		<li><label>Email</label><input type="email" name="form[email]"></li>
	</ul>
	<h4>Invoice address</h4>
	<ul>
		<li><label>Address</label><input type="text" name="form[invoice_address]"></li>
		<li><label>Zip code</label><input type="text" name="form[invoice_zip]"></li>
		<li><label>City</label><input type="text" name="form[invoice_city]"></li>
		<li><label>Country</label><input type="text" name="form[invoice_country]"></li>
	</ul>

	<h4>Delivery address</h4>
	<ul>
		<li><label>Address</label><input type="text" name="form[delivery_address]"></li>
		<li><label>Zip code</label><input type="text" name="form[delivery_zip]"></li>
		<li><label>City</label><input type="text" name="form[delivery_city]"></li>
		<li><label>Country</label><input type="text" name="form[delivery_country]"></li>
	</ul>

	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	
	<button type="submit" value="checkout">Checkout</button>
</form>
@stop

