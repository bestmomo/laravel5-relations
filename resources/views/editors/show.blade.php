@extends ('sheet')

@section('title')
	<h1>Editor sheet</h1>
@stop

@section('content')
	{!! HTML::bootpanel('Editor name', $editor->name) !!}
	{!! HTML::bootpanel('Phone', $editor->contact->phone) !!}
	@if($editor->books->count())
		{!! HTML::bootpanelmulti('Books', $editor->books, 'name') !!}
	@endif
@stop

@section('image')
	<img src="{!! url('images/img05.jpg') !!}">
@stop

