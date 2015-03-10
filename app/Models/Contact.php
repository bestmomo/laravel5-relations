<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	/**
	 * The fillable attributes.
	 *
	 * @var string
	 */
	public $fillable = ['phone'];

	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function editor()
	{
		return $this->belongsTo('App\Models\Editor');
	}

}