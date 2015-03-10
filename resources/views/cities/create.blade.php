@extends ('form')

@section('form')
	{!! Form::open(['route' => 'cities.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('City update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootselect('country_id', 'Country :', $countries) !!}
		{!! Form::bootbuttons(route('cities.index')) !!}
	{!! Form::close() !!}
@stop