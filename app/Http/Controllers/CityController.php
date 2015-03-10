<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CityRepository;
use App\Repositories\CountryRepository;

use Illuminate\Http\Request;

class CityController extends Controller {

	/**
	 * Create CityController instance.
	 *
	 * @param  App\Repositories\CityRepository  $repository
	 * @return void
	 */
	public function __construct(CityRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'cities';
		
		$this->message_store = 'The city has been added';
		$this->message_update = 'The city has been updated';
		$this->message_delete = 'The city has been deleted';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$city = $this->repository->getByIdWithCountryAndAuthors($id);

		return view($this->base.'.show', compact('city'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  App\Repositories\CountryRepository $countryRepository
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(CountryRepository $countryRepository, $id)
	{
		$city = $this->repository->getByIdWithCountry($id);
		$countries = $countryRepository->getAllSelect();

		return view($this->base.'.edit', compact('city', 'countries'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  App\Repositories\CountryRepository $countryRepository
	 * @return Response
	 */
	public function create(CountryRepository $countryRepository)
	{
		$countries = $countryRepository->getAllSelect();

		return view($this->base.'.create', compact('countries'));
	}

}
