<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model {

	/**
	 * The fillable attributes.
	 *
	 * @var string
	 */
	public $fillable = ['name'];

	/**
	 * Morphed by Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\morphedByMany
	 */
	public function categories()
	{
		return $this->morphedByMany('App\Models\Category', 'themable');
	}

	/**
	 * Morphed by Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\morphedByMany
	 */
	public function periods()
	{
		return $this->morphedByMany('App\Models\Period', 'themable');
	}

	/**
	 * Has Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function books()
	{
		return $this->hasMany('App\Models\Book');
	}

}