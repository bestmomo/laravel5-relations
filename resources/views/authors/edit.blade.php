@extends ('form')

@section('form')
	{!! Form::model($author, ['route' => ['authors.update', $author->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Author update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootselect('city_id', 'City :', $cities, $author->country_id) !!}
		{!! Form::bootbuttons(route('authors.index')) !!}
	{!! Form::close() !!}
@stop
