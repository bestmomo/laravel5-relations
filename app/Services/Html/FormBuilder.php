<?php namespace App\Services\Html;

class FormBuilder extends \Collective\Html\Formbuilder {

	/**
	 * Create a wrapped text input.
	 *
	 * @return string
	 */
	public function boottext($name, $label, $errors, $input = null)
	{
		return sprintf('
			<div class="row">
				<div class="form-group %s">
					%s
					<div class="col-md-10">
						%s
						<small class="help-block">%s</small>
					</div>
				</div>
			</div>',
			$errors->has($name) ? 'has-error' : '',
			parent::label($name, $label, ["class" => "col-md-2"]),
			parent::text($name, $input, ['class' => 'form-control']),
			$errors->first($name)
		);
	}

	/**
	 * Create a wrapped select input.
	 *
	 * @return string
	 */
	public function bootselect($name, $label, $select, $id = null)
	{
		return sprintf('
			<div class="row">
				<div class="form-group">
					%s
					<div class="col-md-10">
						%s
					</div>
				</div>
			</div>',
			parent::label($name, $label, ["class" => "col-md-2"]),
			parent::select($name, $select, $id, ['class' => 'form-control'])
		);
	}

	/**
	 * Create a wrapped select input with button.
	 *
	 * @return string
	 */
	public function bootselectbutton($name, $num, $label, $select, $id = null)
	{
		$i = $name.$num;
		return sprintf('
			<div class="row line" id="%s">
				<div class="form-group">
					%s
					<div class="col-md-8">
						%s
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-danger pull-right">Delete</button>
					</div>
				</div>
			</div>',
			'line'.$i,
			parent::label($i, $label, ["class" => "col-md-2"]),
			parent::select($i, $select, $id, ['class' => 'form-control', 'name' => $name.'[]']),
			$name
		);
	}

	/**
	 * Create a legend.
	 *
	 * @return string
	 */
	public function bootlegend($legend)
	{
		return sprintf('
			<div class="row">
				<legend>%s</legend>
			</div>',
			$legend
		);
	}

	/**
	 * Create buttons.
	 *
	 * @return string
	 */
	public function bootbuttons($url)
	{
		return sprintf('
			<div class="form-group">	
				<div class="col-md-offset-2">	
					<a href="%s" class="btn btn-primary">
						<span class="glyphicon glyphicon-circle-arrow-left"></span> Back
					</a>
				  <button type="submit" class="btn btn-primary pull-right">
				  	<span class="glyphicon glyphicon-plane"></span> Valid
				  </button>
				</div>
			</div>',
			$url
		);
	}

}
