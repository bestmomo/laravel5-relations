<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\PeriodRepository;

use Illuminate\Http\Request;

class PeriodController extends Controller {

	/**
	 * Create PeriodController instance.
	 *
	 * @param  App\Repositories\PeriodRepository  $repository
	 * @return void
	 */
	public function __construct(PeriodRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'periods';
		
		$this->message_store = 'The period has been added';
		$this->message_update = 'The period has been updated';
		$this->message_delete = 'The period has been deleted';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$period = $this->repository->getByIdWithThemes($id);

		return view($this->base.'.show', compact('period'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$period = $this->repository->getById($id);

		return view($this->base.'.edit', compact('period'));
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
