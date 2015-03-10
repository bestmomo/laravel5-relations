<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\AuthorRepository;
use App\Repositories\CityRepository;

use Illuminate\Http\Request;

class AuthorController extends Controller {

	/**
	 * Create AuthorController instance.
	 *
	 * @param  App\Repositories\AuthorRepository  $repository
	 * @return void
	 */
	public function __construct(AuthorRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'authors';
		
		$this->message_store = 'The author has been added';
		$this->message_update = 'The author has been updated';
		$this->message_delete = 'The author has been deleted';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$author = $this->repository->getByIdWithCityAndBooks($id);

		return view($this->base.'.show', compact('author'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  App\Repositories\CityRepository $cityRepository
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(CityRepository $cityRepository, $id)
	{
		$author = $this->repository->getByIdWithCity($id);
		$cities = $cityRepository->getAllSelect();

		return view($this->base.'.edit', compact('author', 'cities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  App\Repositories\CityRepository $cityRepository
	 * @return Response
	 */
	public function create(CityRepository $cityRepository)
	{
		$cities = $cityRepository->getAllSelect();

		return view($this->base.'.create', compact('cities'));
	}

}
