<?php namespace Mobly\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;
use Mobly\Cart;
use Mobly\Category;
use Mobly\Order;

class Home extends Controller {

	public function __construct() {
		$this->middleware('guest');
	}
	
	public function home() {
		$categories = \Mobly\Category::all();
		return view('home', ['categories' => $categories]);
	}
	
	public function index() {
		return redirect('home');
	}

	public function category($catId) {
		$category = Category::findOrFail($catId);
		return view('category', ['category' => $category]);
	}
	
	public function product($productId) {
		$product = \Mobly\Product::findOrFail($productId);	
		return view('product', ['product' => $product]);
	}
	
	public function addToCart() {
		$productId = Request::input('product_id');

		$product = \Mobly\Product::findOrFail($productId);

		$cart = \Mobly\Cart::getInstance();

		$cart->add($product);

		return redirect('home');
	}
	
	public function removeFromCart() {
		$productId = Request::input('product_id');

		$product = \Mobly\Product::findOrFail($productId);

		$cart = \Mobly\Cart::getInstance();

		$cart->remove($product);

		return redirect('home');
	}

	public function showCart() {
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
		$data = Request::input('form');

		foreach ($data as $key => $value) {
			if ( ! $value) {
				unset($data[$key]);
			}
		}

		if ( ! $data) {
			throw new \Exception('Form invalid');
		}

		$cart = \Mobly\Cart::getInstance();

		$data['products'] = $cart->getProductIds();

		$order = new Order();
		$order->data = json_encode($data);
		
		$order->save();

		Session::flush();

		return redirect('orderlist');
	}

	public function orderList() {

		$orders = \Mobly\Order::all();

		return view('order', ['orders' => $orders]);
	}

}
