<?php namespace App\Repositories;

use App\Models\Format;

class FormatRepository extends ResourceRepository {

	/**
	 * Create FormatRepository instance.
	 *
	 * @param  App\Models\Format  $format
	 * @return void
	 */
	public function __construct(Format $format)
	{
		$this->model = $format;
	}

	/**
	 * Get Format by id with books.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithBooks($id)
	{
		return $this->model->with('books')->find($id);
	}

}