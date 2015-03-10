@extends ('form')

@section('form')
	{!! Form::open(['route' => 'authors.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Author create') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootselect('city_id', 'City :', $cities) !!}
		{!! Form::bootbuttons(route('authors.index')) !!}
	{!! Form::close() !!}
@stop