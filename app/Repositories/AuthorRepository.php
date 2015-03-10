<?php namespace App\Repositories;

use App\Models\Author;

class AuthorRepository extends ResourceRepository {

	/**
	 * Create AuthorRepository instance.
	 *
	 * @param  App\Models\Author  $author
	 * @return void
	 */
	public function __construct(Author $author)
	{
		$this->model = $author;
	}

	/**
	 * Get Author by id with City and Books.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCityAndBooks($id)
	{
		return $this->model->with('city', 'books')->find($id);
	}

	/**
	 * Get Author by id with City.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCity($id)
	{
		return $this->model->with('city')->find($id);
	}

}