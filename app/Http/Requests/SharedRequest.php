<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SharedRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$table = $this->segment(1);

		$name = 'required|max:255|unique:' . $table;
			
		if ($this->isMethod('post'))
		{
			$rules = ['name' => $name];
		}
		
		$rules = ['name' => $name . ',name,' . $this->segment(2)];

		if($table == 'editors')
		{
			$rules['phone'] = 'required|regex:/^[0-9 ]+$/|min:8';
		}

		return $rules;
	}

}
