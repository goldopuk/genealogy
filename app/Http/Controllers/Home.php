<?php namespace Mobly\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Mobly\Cart;
use Mobly\Category;

class Home extends Controller {

	public function index()
	{
		$products = \Mobly\Product::all();
		$categories = \Mobly\Category::all();
		return view('home', ['articles' => $products, 'categories' => $categories]);
	}

	public function category()
	{
		$catId = Request::input('id');

		$category = Category::findOrFail($catId);

		return view('category', ['category' => $category]);
	}



}
