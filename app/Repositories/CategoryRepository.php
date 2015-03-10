<?php namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends ResourceRepository {

	/**
	 * Create CategoryRepository instance.
	 *
	 * @param  App\Models\Category  $category
	 * @return void
	 */
	public function __construct(Category $category)
	{
		$this->model = $category;
	}

	/**
	 * Get Category by id with themes.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithThemes($id)
	{
		return $this->model->with('themes')->find($id);
	}

}