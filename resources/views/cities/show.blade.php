@extends ('sheet')

@section('title')
	<h1>City sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('City name', $city->name) !!}
	{!! HTML::bootpanel('Country', $city->country->name) !!}
	@if($city->authors->count())
		{!! HTML::bootpanelmulti('Authors', $city->authors, 'name') !!}
	@endif
@stop

@section('image')
	<img src="{!! url('images/img02.jpg') !!}">
@stop

