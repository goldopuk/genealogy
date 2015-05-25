<?php namespace Mobly;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'product';

	public function categories() {
		return $this->belongsToMany('Mobly\Category');
	}

}
