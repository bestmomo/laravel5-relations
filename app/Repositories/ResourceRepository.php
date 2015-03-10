<?php namespace App\Repositories;

abstract class ResourceRepository {

    protected $model;

    public function getPaginate($n)
	{
		return $this->model->paginate($n);
	}

	public function store(Array $inputs)
	{
		return $this->model->create($inputs);
	}

	public function getById($id)
	{
		return $this->model->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		return $this->getById($id)->fill($inputs)->save();
	}

	public function updateByModel($model, Array $inputs)
	{
		return $model->fill($inputs)->save();
	}

	public function destroyById($id)
	{
		return $this->getById($id)->delete();
	}

	public function getAllSelect()
	{
		return $this->model->lists('name', 'id');
	}

}