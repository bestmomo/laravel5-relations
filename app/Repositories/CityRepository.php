<?php namespace App\Repositories;

use App\Models\City;

class CityRepository extends ResourceRepository {

	/**
	 * Create CityRepository instance.
	 *
	 * @param  App\Models\City  $city
	 * @return void
	 */
	public function __construct(City $city)
	{
		$this->model = $city;
	}

	/**
	 * Get City by id with country and authors.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCountryAndAuthors($id)
	{
		return $this->model->with('country', 'authors')->find($id);
	}

	/**
	 * Get City by id with country.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCountry($id)
	{
		return $this->model->with('country')->find($id);
	}

}