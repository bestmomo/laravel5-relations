<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\FormatRepository;

use Illuminate\Http\Request;

class FormatController extends Controller {

	/**
	 * Create FormatController instance.
	 *
	 * @param  App\Repositories\FormatRepository  $repository
	 * @return void
	 */
	public function __construct(FormatRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'formats';
		
		$this->message_store = 'The format has been added';
		$this->message_update = 'The format has been updated';
		$this->message_delete = 'The format has been deleted';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$format = $this->repository->getByIdWithBooks($id);

		return view($this->base.'.show', compact('format'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$format = $this->repository->getById($id);

		return view($this->base.'.edit', compact('format'));
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
