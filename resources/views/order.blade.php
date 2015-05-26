@extends('layout')

@section('title', 'Mobly')

@section('content')

<h3>Your orders</h3>

<div class="orders">
	<ul class="product-list">
	<?  foreach ($orders as $order): ?>
		<li>
			<? $fields =  json_decode($order->data) ?>
			Order ID: <?= $order->id ?>
			<ul>
			<? foreach ($fields as $key => $value): ?>
				<li><?= $key ?> : <?= is_array($value) ? join(', ', $value) : $value ?></li>
			<? endforeach ?>
			</ul>
		</li>
	<? endforeach ?>
	</ul>
</div>


@stop



