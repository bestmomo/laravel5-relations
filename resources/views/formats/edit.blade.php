@extends ('form')

@section('form')
	{!! Form::model($format, ['route' => ['formats.update', $format->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Format update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('formats.index')) !!}
	{!! Form::close() !!}
@stop
