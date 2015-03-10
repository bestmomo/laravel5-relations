@extends ('form')

@section('form')
	{!! Form::open(['route' => 'formats.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Format create') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('formats.index')) !!}
	{!! Form::close() !!}
@stop