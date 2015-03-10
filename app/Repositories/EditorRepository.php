<?php namespace App\Repositories;

use App\Models\Editor;
use App\Models\Contact;

class EditorRepository extends ResourceRepository {

	protected $contact;

	/**
	 * Create EditorRepository instance.
	 *
	 * @param  App\Models\Editor  $editor
	 * @param  App\Models\Contact  $contact
	 * @return void
	 */
	public function __construct(Editor $editor, Contact $contact)
	{
		$this->model = $editor;
		$this->contact = $contact;
	}

	/**
	 * Get Editor by id with contact and books.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithContactAndBooks($id)
	{
		return $this->model->with('contact', 'books')->find($id);
	}

	/**
	 * Get Editor by id with contact.
	 *
	 * @param integer  $id
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithContact($id)
	{
		return $this->model->with('contact')->find($id);
	}

	/**
	 * Create contact for editor.
	 *
	 * @param App\Models\Editor  $editor
	 * @param array  $inputs
	 * @return void
	 */
	public function saveContact($editor, $inputs)
	{
		$contact = new $this->contact($inputs);

		$editor->contact()->save($contact);
	}

	/**
	 * Update contact for editor.
	 *
	 * @param integer  $id
	 * @param array  $inputs
	 * @return void
	 */
	public function updateContact($id, $inputs)
	{
		$editor = $this->getById($id);

		$editor->contact()->update($inputs);
	}

}