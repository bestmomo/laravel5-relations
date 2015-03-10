@extends ('sheet')

@section('title')
	<h1>Country sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Country name', $country->name) !!}
	@if($country->cities->count())
		{!! HTML::bootpanelmulti('Cities', $country->cities, 'name') !!}
	@endif
	@if($country->authors->count())
		{!! HTML::bootpanelmulti('Authors', $country->authors, 'name') !!}
	@endif
	
@stop

@section('image')
	<img src="{!! url('images/img01.jpg') !!}">
@stop
