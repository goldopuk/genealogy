<?php namespace Mobly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Product extends Controller {

	public function add(Request $request)
	{
		$productId = $request->input('product_id');

		$product = \Mobly\Product::findOrFail($productId);

		$cart = \Mobly\Cart::getInstance();

		$cart->add($product);

		return redirect('home');
	}

	public function show(Request $request)
	{
		return view('cart');
	}




}
