@extends ('form')

@section('form')
	{!! Form::open(['route' => 'periods.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Period create') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('periods.index')) !!}
	{!! Form::close() !!}
@stop