<?php namespace App\Repositories;

use App\Models\Period;

class PeriodRepository extends ResourceRepository {

	/**
	 * Create PeriodRepository instance.
	 *
	 * @param  App\Models\Period  $period
	 * @return void
	 */
	public function __construct(Period $period)
	{
		$this->model = $period;
	}

	/**
	 * Get Period by id with themes.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithThemes($id)
	{
		return $this->model->with('themes')->find($id);
	}

}