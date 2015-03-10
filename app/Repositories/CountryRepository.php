<?php namespace App\Repositories;

use App\Models\Country;

class CountryRepository extends ResourceRepository {

	/**
	 * Create CountryRepository instance.
	 *
	 * @param  App\Models\Country  $country
	 * @return void
	 */
	public function __construct(Country $country)
	{
		$this->model = $country;
	}

	/**
	 * Get Country by id with cities and authors.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCitiesAndAuthors($id)
	{
		return $this->model->with('cities', 'authors')->find($id);
	}
}