<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model {

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
	public function themes()
	{
		return $this->morphToMany('App\Models\Theme', 'themable');
	}

}