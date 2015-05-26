@extends('layout')

@section('title', 'Mobly')

@section('content')

<h1><a href="<?= url('home') ?>">Shop Mobly > checkout</a></h1>

<form action="<?= url('saveorder') ?>" method="POST" enctype="application/x-www-form-urlencoded">
	<ul>
		<li><label>Full name</label><input type="text" name="fullname"></li>
		<li><label>Email</label><input type="email" name="email"></li>
		<li><label>Address</label><input type="text" name="address"></li>
		<li><label>Zip code</label><input type="text" name="zip"></li>
		<li><label>City</label><input type="text" name="city"></li>
		<li><label>Country</label><input type="text" name="country"></li>
	</ul>

	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	
	<input type="submit" value="checkout"></input>
</form>
@stop

