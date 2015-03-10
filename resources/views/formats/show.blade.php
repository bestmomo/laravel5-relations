@extends ('sheet')

@section('title')
	<h1>Format sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Format name', $format->name) !!}
	@if($format->books->count())
		{!! HTML::bootpanelmulti('Books', $format->books, 'name') !!}
	@endif
@stop

@section('image')
	<img src="{!! url('images/img09.jpg') !!}">
@stop