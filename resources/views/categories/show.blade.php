@extends ('sheet')

@section('title')
	<h1>Category sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Category name', $category->name) !!}
	@if($category->themes->count())
		{!! HTML::bootpanelmulti('Themes', $category->themes, 'name') !!}
	@endif
@stop

@section('image')
	<img src="{!! url('images/img07.jpg') !!}">
@stop

