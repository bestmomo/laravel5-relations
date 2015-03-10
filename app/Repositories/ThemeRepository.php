<?php namespace App\Repositories;

use App\Models\Theme;

class ThemeRepository extends ResourceRepository {

	/**
	 * Create ThemeRepository instance.
	 *
	 * @param  App\Models\Theme  $theme
	 * @return void
	 */
	public function __construct(Theme $theme)
	{
		$this->model = $theme;
	}

	/**
	 * Get Theme by id with categories, periods and books.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCategoriesAndPeriodsAndBooks($id)
	{
		return $this->model->with('categories', 'periods', 'books')->find($id);
	}

	/**
	 * Get Theme by id with categories and periods.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCategoriesAndPeriods($id)
	{
		return $this->model->with('categories', 'periods')->find($id);
	}

	/**
	 * Attach categories and periods
	 *
	 * @return void
	 */
	public function attachRelated($theme, $request)
	{
		if($request->has('categories'))
		{
			$theme->categories()->attach(array_unique($request->input('categories')));
		}

		if($request->has('periods'))
		{
			$theme->periods()->attach(array_unique($request->input('periods')));
		}		
	}

	/**
	 * Sync categories and periods
	 *
	 * @return void
	 */
	public function syncRelated($theme, $request)
	{
		if($request->has('categories'))
		{
			$theme->categories()->sync(array_unique($request->input('categories')));
		}

		if($request->has('periods'))
		{
			$theme->periods()->sync(array_unique($request->input('periods')));
		}		
	}

}