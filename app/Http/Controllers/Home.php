<?php namespace Mobly\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Mobly\Cart;

class Home extends Controller {

	public function index()
	{
		session()->regenerate();
		$list = \Mobly\Product::all();
		$cart = Cart::getInstance();
		var_dump($cart);
		return view('home', ['articles' => $list]);
	}



}
