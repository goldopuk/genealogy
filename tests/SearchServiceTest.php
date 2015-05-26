<?php

class SearchServiceTest extends TestCase {

	public function testSearchProduct()
	{
		$searchServ = \Mobly\SearchService::getInstance();
		
		$products = $searchServ->searchProducts('tom');
		
		$this->assertEquals(1, count($products));
	}

}
