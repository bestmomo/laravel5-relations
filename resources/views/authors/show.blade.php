@extends ('sheet')

@section('title')
	<h1>Author sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Author name', $author->name) !!}
	{!! HTML::bootpanel('City', $author->city->name) !!}
	@if($author->books->count())
		{!! HTML::bootpanelmulti('Books', $author->books, 'name') !!}
	@endif
@stop

@section('image')
	<img src="{!! url('images/img03.jpg') !!}">
@stop


