<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	/**
	 * Morph To relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\morphTo
	 */
	public function bookable()
	{
		return $this->morphTo();
	}

	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function theme()
	{
		return $this->belongsTo('App\Models\Theme');
	}

	/**
	 * Many to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\belongToMany
	 */
	public function authors()
	{
		return $this->belongsToMany('App\Models\Author');
	}

}