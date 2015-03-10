@extends ('form')

@section('form')
	{!! Form::model($country, ['route' => ['countries.update', $country->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Country update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('countries.index')) !!}
	{!! Form::close() !!}
@stop
