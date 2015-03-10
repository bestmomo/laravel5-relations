<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CountryRepository;

use Illuminate\Http\Request;

class CountryController extends Controller {

	public function __construct(CountryRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'countries';
		
		$this->message_store = 'The country has been added';
		$this->message_update = 'The country has been updated';
		$this->message_delete = 'The country has been deleted';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$country = $this->repository->getByIdWithCitiesAndAuthors($id);

		return view($this->base.'.show', compact('country'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$country = $this->repository->getById($id);

		return view($this->base.'.edit', compact('country'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view($this->base.'.create');
	}

}
