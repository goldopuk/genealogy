<!DOCTYPE html>  
<html>
    <head>
        <title>App Name - @yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  
    </head>
    <body>
		<div class="debug">
			<?
			$cart = \Mobly\Cart::getInstance();
			?>
			<a href="<?= url('reset') ?>">reset</a>
		</div>
	
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>