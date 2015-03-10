<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	/**
	 * The fillable attributes.
	 *
	 * @var string
	 */
	public $fillable = ['name'];

	/**
	 * Has Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function cities()
	{
		return $this->hasMany('App\Models\City');
	}

	/**
	 * Has Many Through relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasManyThrough
	 */
	public function authors()
	{
		return $this->hasManyThrough('App\Models\Author', 'App\Models\City');
	}

}