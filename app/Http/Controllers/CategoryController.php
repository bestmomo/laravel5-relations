<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Create CategoryController instance.
	 *
	 * @param  App\Repositories\CategoryRepository $repository
	 * @return void
	 */
	public function __construct(CategoryRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'categories';
		
		$this->message_store = 'The category has been added';
		$this->message_update = 'The category has been updated';
		$this->message_delete = 'The category has been deleted';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = $this->repository->getByIdWithThemes($id);

		return view($this->base.'.show', compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = $this->repository->getById($id);

		return view($this->base.'.edit', compact('category'));
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
