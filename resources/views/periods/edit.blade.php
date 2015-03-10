@extends ('form')

@section('form')
	{!! Form::model($period, ['route' => ['categories.update', $period->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Period update') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}
		{!! Form::bootbuttons(route('periods.index')) !!}
	{!! Form::close() !!}
@stop
