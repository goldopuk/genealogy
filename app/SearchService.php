<?php namespace Mobly;

class SearchService {

	static private $_instance = null;

	static public function getInstance()
	{
		if ( ! self::$_instance)
		{
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	protected function __construct() {
	}

	public function searchProducts($str) {
		// return Product::where('name', 'LIKE', "%{$str}%")->take(100)->get();
		return Product::whereRaw('name LIKE ? OR description = ?', ["%{$str}%", "%{$str}%"])->get();
	}

}
