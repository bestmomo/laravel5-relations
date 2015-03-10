@extends ('sheet')

@section('title')
	<h1>Book sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Book name', $book->name) !!}
	{!! HTML::bootpanel('Theme', $book->theme->name) !!}
	{!! HTML::bootpanel('Type : ' . explode('\\', $book->bookable_type)[2], $book->bookable->name) !!}
	{!! HTML::bootpanelmulti('Authors', $book->authors, 'name') !!}
@stop

@section('image')
	<img src="{!! url('images/img04.jpg') !!}">
@stop