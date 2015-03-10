@extends ('form')

@section('form')
	{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Category update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('categories.index')) !!}
	{!! Form::close() !!}
@stop
