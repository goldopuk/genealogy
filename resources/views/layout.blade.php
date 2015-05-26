<!DOCTYPE html>  
<html lang="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
        <title>App Name - @yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">   
    </head>
    <body>
		 <div class="container">
	
			<div class="debug">
				<?
				$cart = \Mobly\Cart::getInstance();
				?>
				<a href="<?= url('reset') ?>">reset</a>
			</div>
		
			<div class="top-bar">
			
				<div class="logo"><a href="<?= url('home') ?>">Shop Mobly !!</a></div>
				<div class="search">
					<form action="<?= url('search') ?>" method="GET">
						<input type="search" name="s" value="" placeholder="search">
						<input type="submit" value="search"></input>
					</form>
				</div>

				<div class="cart">
					<?
					$cart = \Mobly\Cart::getInstance();
					?>

					You have <?= count($cart->getProducts()) ?> product(s) in <a href="<?= url('showcart')?>">your cart.</a>
				</div>
			
			</div>
	
       
            @yield('content')
        </div>
    </body>
</html>