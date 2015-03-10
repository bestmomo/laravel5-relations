@extends ('form')

@section('form')
	{!! Form::model($editor, ['route' => ['editors.update', $editor->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Editor update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::boottext('phone', 'Phone :', $errors, $editor->contact->phone) !!}
		{!! Form::bootbuttons(route('editors.index')) !!}
	{!! Form::close() !!}
@stop
