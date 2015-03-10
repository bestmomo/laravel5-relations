<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Format extends Model {

	/**
	 * The fillable attributes.
	 *
	 * @var string
	 */
	public $fillable = ['name'];

	/**
	 * Morph Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\morphMany
	 */
	public function books()
	{
		return $this->morphMany('App\Models\Book', 'bookable');
	}

}