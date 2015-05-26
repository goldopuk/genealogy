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

    public function run()
    {
        DB::table('product')->delete();
		DB::table('category')->delete();
		DB::table('category_product')->delete();
		
		$catBook = Mobly\Category::create(['name' => 'Books']);
		$catElec = Mobly\Category::create(['name' => 'Electonics']);
		$catFurniture = Mobly\Category::create(['name' => 'Furniture']);

		$tom = Mobly\Product::create(['name' => 'Tom Sawer']);
		$tom->categories()->attach($catBook->id);
		
		$cd = Mobly\Product::create(['name' => 'Cd player XS200']);
		$cd->categories()->attach($catElec->id);
		
		$electro = Mobly\Product::create(['name' => 'Camera Panasonic XL100']);
		$electro->categories()->attach($catElec->id);
		
		$electro = Mobly\Product::create(['name' => 'MacBook air 11']);
		$electro->categories()->attach($catElec->id);
			
		$electro = Mobly\Product::create(['name' => 'Apple Watch']);
		$electro->categories()->attach($catElec->id);
		
		$book = Mobly\Product::create(['name' => 'Lord of the Rings']);
		$book->categories()->attach($catBook->id);
	
		$book = Mobly\Product::create(['name' => 'The Hitchhiker\'s Guide to the Galaxy']);
		$book->categories()->attach($catBook->id);
		
		$book = Mobly\Product::create(['name' => 'Moby Dick']);
		$book->categories()->attach($catBook->id);
		
		$book = Mobly\Product::create(['name' => 'Bahia de todos os santos']);
		$book->categories()->attach($catBook->id);
		
		$furniture = Mobly\Product::create(['name' => 'Sofa']);
		$furniture->categories()->attach($catFurniture->id);
		
		$furniture = Mobly\Product::create(['name' => 'Bed']);
		$furniture->categories()->attach($catFurniture->id);
		
		$furniture = Mobly\Product::create(['name' => 'Shelf']);
		$furniture->categories()->attach($catFurniture->id);
		
		$furniture = Mobly\Product::create(['name' => 'Chair']);
		$furniture->categories()->attach($catFurniture->id);
		
	}

}
