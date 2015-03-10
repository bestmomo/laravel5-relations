@extends ('form')

@section('form')
	{!! Form::open(['route' => 'countries.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Country create') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('countries.index')) !!}
	{!! Form::close() !!}
@stop