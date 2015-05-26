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
	
	public function remove(\Mobly\Product $product) {

		// this is dirty
		Session::forget('products');
		
		$products = $this->products;
		$this->products = [];
		$removed  = false; // kludge to just filter the first item
		
		foreach ($products as $curProduct) {
			if ( ! $removed && $curProduct->id === $product->id) {	
				$removed = true;
			} else {
				$this->products[] = $curProduct;
				Session::push('products', $product->id);
			}
		}
	}

	function getTotal() {

		$total = array_reduce($this->products, function ($sum, $el) {
			$sum += $el->price;
			return $sum;
		});

		return $total;
	}

	function getProductIds() {
		$ids = array_reduce($this->products, function ($ids, $product) {
			if ( ! $ids) {
				$ids = [];
			}

			$ids[] = $product->id;
			return $ids;
		});

		return $ids;
	}

	public function getProducts() {
		return $this->products;
	}

}
