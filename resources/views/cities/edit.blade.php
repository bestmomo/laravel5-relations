@extends ('form')

@section('form')
	{!! Form::model($city, ['route' => ['cities.update', $city->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('City update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootselect('country_id', 'Country :', $countries, $city->country_id) !!}
		{!! Form::bootbuttons(route('cities.index')) !!}
	{!! Form::close() !!}
@stop
