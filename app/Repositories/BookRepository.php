<?php namespace App\Repositories;

use App\Models\Book;

class BookRepository extends ResourceRepository {

	/**
	 * Create BookRepository instance.
	 *
	 * @param  App\Models\Author  $book
	 * @return void
	 */
	public function __construct(Book $book)
	{
		$this->model = $book;
	}

	/**
	 * Get Book by id with Authors, Theme and Bookable.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithAuthorsAndThemeAndBookable($id)
	{
		return $this->model->with('authors', 'theme', 'bookable')->find($id);
	}

	/**
	 * Get Book type by id.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getTypeById($id)
	{
		return $this->getById($id)->bookable;
	}

	/**
	 * Get editor book type.
	 *
	 * @return bool
	 */
	public function getTypeEditor($book)
	{
		return $book->bookable_type == 'App\Models\Editor';
	}

	/**
	 * Create an author.
	 *
	 * @return void
	 */
	public function store(Array $inputs)
	{
		$this->save(new $this->model, $inputs);
	}

	/**
	 * Update an author.
	 *
	 * @return void
	 */
	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	/**
	 * Save an author.
	 *
	 * @return void
	 */
	protected function save($book, Array $inputs)
	{
		$book->theme_id = $inputs['theme_id'];
		$book->name = $inputs['name'];
		$type = $inputs['bookable'];
		$book->bookable_id = $type == 'editor'? $inputs['editor_id'] : $inputs['format_id'];
		$book->bookable_type = $type == 'editor'? 'App\Models\Editor' : 'App\Models\Format';
				
		$book->save();

		$book->authors()->sync(array_unique($inputs['authors']));
	}

}