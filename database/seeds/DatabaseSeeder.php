<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('TableSeeder');
	}
}

class TableSeeder extends Seeder {

	public function run() {
		DB::table('product')->delete();
		DB::table('category')->delete();
		DB::table('category_product')->delete();
		
		$catBook = Mobly\Category::create(['name' => 'Books', 'description' => 'just some books']);
		$catElec = Mobly\Category::create(['name' => 'Electonics', 'description' => 'just some electronics']);
		$catFurniture = Mobly\Category::create(['name' => 'Furniture', 'description' => 'amazing furnitures']);

		$tom = Mobly\Product::create(['name' => 'Tom Sawer', 'description' => 'good book', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$tom->categories()->attach($catBook->id);
		
		$cd = Mobly\Product::create(['name' => 'Cd player XS200', 'description' => 'good cd player', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$cd->categories()->attach($catElec->id);
		
		$electro = Mobly\Product::create(['name' => 'Camera Panasonic XL100', 'description' => 'good camera', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$electro->categories()->attach($catElec->id);
		
		$electro = Mobly\Product::create(['name' => 'MacBook air 11', 'description' => 'good mac', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$electro->categories()->attach($catElec->id);
			
		$electro = Mobly\Product::create(['name' => 'Apple Watch', 'description' => 'good watch', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$electro->categories()->attach($catElec->id);
		
		$book = Mobly\Product::create(['name' => 'Lord of the Rings', 'description' => 'good book', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$book->categories()->attach($catBook->id);
	
		$book = Mobly\Product::create(['name' => 'The Hitchhiker\'s Guide to the Galaxy', 'description' => 'good book', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$book->categories()->attach($catBook->id);
		
		$book = Mobly\Product::create(['name' => 'Moby Dick', 'description' => 'bad book', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$book->categories()->attach($catBook->id);
		
		$book = Mobly\Product::create(['name' => 'Bahia de todos os santos', 'description' => 'cool book', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$book->categories()->attach($catBook->id);
		
		$furniture = Mobly\Product::create(['name' => 'Sofa', 'description' => 'cool sofa', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$furniture->categories()->attach($catFurniture->id);
		
		$furniture = Mobly\Product::create(['name' => 'Bed', 'description' => 'good bed', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$furniture->categories()->attach($catFurniture->id);
		
		$furniture = Mobly\Product::create(['name' => 'Shelf' , 'description' => 'good shelf', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$furniture->categories()->attach($catFurniture->id);
		
		$furniture = Mobly\Product::create(['name' => 'Chair', 'description' => 'good chair', 'price' => 20, 'image' => 'http://lorempixel.com/100/100']);
		$furniture->categories()->attach($catFurniture->id);
	}

}
