<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ThemeRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PeriodRepository;
use App\Http\Requests\SharedRequest;

use Illuminate\Http\Request;

class ThemeController extends Controller {

	/**
	 * Create ThemeController instance.
	 *
	 * @param  App\Repositories\ThemeRepository  $repository
	 * @return void
	 */
	public function __construct(ThemeRepository $repository)
	{
		$this->repository = $repository;

		$this->base = 'themes';
		
		$this->message_store = 'The theme has been added';
		$this->message_update = 'The theme has been updated';
		$this->message_delete = 'The theme has been deleted';

		$this->middleware('ajax', ['only' => ['store', 'update']]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$theme = $this->repository->getByIdWithCategoriesAndPeriodsAndBooks($id);

		return view($this->base.'.show', compact('theme'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  App\Repositories\CategoryRepository $categoryRepository
	 * @param  App\Repositories\PeriodRepository $periodRepository
	 * @return Response
	 */
	public function create(
		CategoryRepository $categoryRepository,
		PeriodRepository $periodRepository)
	{
		$categories = $categoryRepository->getAllSelect();
		$periods = $periodRepository->getAllSelect();

		return view($this->base.'.create', compact('categories', 'periods'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  App\Http\Requests\SharedRequest $request
	 * @return Response
	 */
	public function store(SharedRequest $request)
	{
		$theme = $this->repository->store($request->only('name'));

		$this->repository->attachRelated($theme, $request);

		session()->flash('message_success', $this->message_store);

		return response()->json();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  App\Repositories\CategoryRepository $categoryRepository
	 * @param  App\Repositories\PeriodRepository $periodRepository
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(
		CategoryRepository $categoryRepository,
		PeriodRepository $periodRepository,
		$id)
	{
		$theme = $this->repository->getByIdWithCategoriesAndPeriods($id);

		$categories = $categoryRepository->getAllSelect();
		$periods = $periodRepository->getAllSelect();

		return view($this->base.'.edit', compact('theme', 'categories', 'periods'));
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
		$theme = $this->repository->getById($id);

		$this->repository->updateByModel($theme, $request->only('name'));

		$this->repository->syncRelated($theme, $request);

		session()->flash('message_success', $this->message_update);

		return response()->json();
	}

}
