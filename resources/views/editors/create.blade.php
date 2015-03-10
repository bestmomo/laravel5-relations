@extends ('form')

@section('form')
	{!! Form::open(['route' => 'editors.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Editor create') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::boottext('phone', 'Phone :', $errors) !!}
		{!! Form::bootbuttons(route('editors.index')) !!}
	{!! Form::close() !!}
@stop