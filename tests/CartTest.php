<?php

class CartTest extends TestCase {

	public function testSearchProduct()
	{
		$cart = \Mobly\Cart::getInstance();

		// i should create those products no setup()
		// but I q, qssu,ing those products exists in DB

		$product = \Mobly\Product::find(1);
		$cart->add($product);
		$product = \Mobly\Product::find(2);
		$cart->add($product);


		$this->assertEquals(2, count($cart->getProducts()));
	}

}
