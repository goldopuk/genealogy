<!DOCTYPE html>  
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Mobly - @yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body>
		<div class="container">
			<div  class="debug-bar" ng-controller="DebugController">
				<a class="btn-toggle" ng-click="toggleBar()">toggle bar</a>
				<div class="debug" ng-if="show">
					<?php
					$cart = \Mobly\Cart::getInstance();
					?>
					DEBUG BAR : <a href="<?= url('reset') ?>">reset cart</a>
				</div>
			</div>
		
			<div class="top-bar">
			
				<div class="logo"><a href="<?= url('home') ?>">Mobly!</a></div>
				<div class="search">
					<form action="<?= url('search') ?>" method="GET">
						<input type="search" name="s" value="" placeholder="search">
						<input type="submit" value="search"></input>
					</form>
				</div>

				<div class="cart">
					<?php $cart = \Mobly\Cart::getInstance(); ?>

					You have <?= count($cart->getProducts()) ?> product(s) in <a href="<?= url('showcart')?>">your cart.</a>
				</div>
			
			</div>

			@yield('content')
		</div>

		<script src="{{ asset('bower/jquery/dist/jquery.min.js') }}"></script>
		<script src="{{ asset('bower/angular/angular.min.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>