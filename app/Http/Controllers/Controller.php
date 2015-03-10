<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Requests\SharedRequest;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    /**
     * The UserRepository instance.
     *
     * @var App\Repositories\UserRepository
     */
	protected $repository;

    /**
     * The base view path.
     *
     * @var string
     */
	protected $base;

    /**
     * The store message.
     *
     * @var string
     */	
	protected $message_store;

	/**
     * The update message.
     *
     * @var string
     */	
	protected $message_update;

	/**
     * The delete message.
     *
     * @var string
     */	
	protected $message_delete;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lines = $this->repository->getPaginate(10);
		$links = str_replace('/?', '?', $lines->render());

		return view($this->base.'.list', compact('lines', 'links'));
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
		$this->repository->update($id, $request->all());

		return redirect(route($this->base.'.index'))->with('message_success', $this->message_update);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  App\Http\Requests\SharedRequest $request
	 * @return Response
	 */
	public function store(SharedRequest $request)
	{
		$this->repository->store($request->all());

		return redirect(route($this->base.'.index'))->with('message_success', $this->message_store);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->repository->destroyById($id);

		return redirect(route($this->base.'.index'))->with('message_success', $this->message_delete);
	}

}
