<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

	public $fillable = ['name', 'city_id'];

	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function city()
	{
		return $this->belongsTo('App\Models\City');
	}

	/**
	 * Many to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\belongToMany
	 */
	public function books()
	{
		return $this->belongsToMany('App\Models\Book');
	}

}