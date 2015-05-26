<?php namespace Mobly\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;
use Mobly\Cart;
use Mobly\Category;
use Mobly\Order;

class Home extends Controller {

	public function index()
	{
		$categories = \Mobly\Category::all();
		return view('home', ['categories' => $categories]);
	}

	public function category($catId)
	{
		$category = Category::findOrFail($catId);

		return view('category', ['category' => $category]);
	}
	
	public function product($productId)
	{
		$product = \Mobly\Product::findOrFail($productId);

		return view('product', ['product' => $product]);
	}
	
	public function addToCart()
	{
		$productId = Request::input('product_id');

		$product = \Mobly\Product::findOrFail($productId);

		$cart = \Mobly\Cart::getInstance();

		$cart->add($product);

		return redirect('home');
	}
	
	public function removeFromCart()
	{
		$productId = Request::input('product_id');

		$product = \Mobly\Product::findOrFail($productId);

		$cart = \Mobly\Cart::getInstance();

		$cart->remove($product);

		return redirect('home');
	}

	public function showCart()
	{
		return view('cart');
	}
	
	public function reset() {
		Session::flush();
		return redirect('home');
	}
	
	public function search() {
		$str = REQUEST::input('s');

		$searchServ = \Mobly\SearchService::getInstance();
		
		$products = $searchServ->searchProducts($str);
		
		return view('search', ['products' => $products]);
		
	}
	
	public function checkout() {
		return view('checkout');		
	}
	
	public function saveOrder() {
		$data = [];
		$data['fullname'] = Request::input('fullname');
		$data['email']  = Request::input('email');
		$data['address']  = Request::input('address');
		$data['zip']  = Request::input('zip');
		$data['city']  = Request::input('city');
		$data['country']  = Request::input('country');
		
		$order = new Order();
		$order->data = json_encode($data);
		
		$order->save();
		
		return redirect('reset');
	}



}
