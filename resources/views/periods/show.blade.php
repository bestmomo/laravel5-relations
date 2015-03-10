@extends ('sheet')

@section('title')
	<h1>Period sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Period name', $period->name) !!}
	@if($period->themes->count())
		{!! HTML::bootpanelmulti('Themes', $period->themes, 'name') !!}
	@endif
@stop

@section('image')
	<img src="{!! url('images/img08.jpg') !!}">
@stop

