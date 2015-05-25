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

		$tom = Mobly\Product::create(['name' => 'Tom Sawer']);
		$cd = Mobly\Product::create(['name' => 'Cd player']);

		$catBook = Mobly\Category::create(['name' => 'Books']);
		$catElec = Mobly\Category::create(['name' => 'Electonics']);

		$tom->categories()->attach($catBook->id);
		$cd->categories()->attach($catElec->id);
	}

}
