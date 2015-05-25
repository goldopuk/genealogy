<?php namespace Mobly;

use Illuminate\Support\Facades\Session;

class Cart {

	static private $_instance = null;

	protected $products = [];

	static public function getInstance()
	{
		if ( ! self::$_instance)
		{
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	protected function __construct() {

		foreach (Session::get('products', []) as $productId) {
			$product = Product::findOrFail($productId);
			$this->products[] = $product;
		}
	}

	public function add(\Mobly\Product $product) {
		$this->products[] = $product;
		Session::push('products', $product->id);
	}

	public function getProducts() {
		return $this->products;
	}

}
