<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\EditorRepository;
use App\Repositories\ContactRepository;
use App\Http\Requests\SharedRequest;

use Illuminate\Http\Request;

class EditorController extends Controller {

	/**
	 * Create EditorController instance.
	 *
	 * @param  App\Repositories\EditorRepository  $repository
	 * @return void
	 */
	public function __construct(EditorRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'editors';
		
		$this->message_store = 'The editor has been added';
		$this->message_update = 'The editor has been updated';
		$this->message_delete = 'The editor has been deleted';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$editor = $this->repository->getByIdWithContactAndBooks($id);

		return view($this->base.'.show', compact('editor'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  App\Http\Requests\SharedRequest $request
	 * @return Response
	 */
	public function store(SharedRequest $request)
	{
		$editor = $this->repository->store($request->only('name'));

		$this->repository->saveContact($editor, $request->only('phone'));

		return redirect(route($this->base.'.index'))->with('message_success', $this->message_store);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$editor = $this->repository->getByIdWithContact($id);

		return view($this->base.'.edit', compact('editor'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  App\Http\Requests\SharedRequest $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SharedRequest $request, $id)
	{
		$this->repository->update($id, $request->only('name'));

		$this->repository->updateContact($id, $request->only('phone'));

		return redirect(route($this->base.'.index'))->with('message_success', $this->message_update);
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
