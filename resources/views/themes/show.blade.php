@extends ('sheet')

@section('title')
	<h1>Theme sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Theme name', $theme->name) !!}
	{!! HTML::bootpanelmulti('Categories', $theme->categories, 'name') !!}
	{!! HTML::bootpanelmulti('Periods', $theme->periods, 'name') !!}
	{!! HTML::bootpanelmulti('Books', $theme->books, 'name') !!}
@stop

@section('image')
	<img src="{!! url('images/img06.jpg') !!}">
@stop