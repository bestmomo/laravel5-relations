@extends ('form')

@section('form')
	{!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Category create') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('categories.index')) !!}
	{!! Form::close() !!}
@stop