@extends('form')

@section('form')
	{!! Form::open(['route' => 'books.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Create a book') !!}<br>
		{!! Form::boottext('name', 'Name :', $errors) !!}<br>
		{!! Form::bootselect('theme_id', 'Theme :', $themes) !!}<br>
		{!! Form::bootselectbutton('authors', 1, 'Author :', $authors) !!}				  	
		<div class="row">
			<button id="add" type="button" class="btn btn-primary pull-right">Add an author</button>
		</div>
		<br>
		<div class="row form-group">
			<label class="radio-inline">
				{!! Form::radio('bookable', 'editor', true) !!} Editor
			</label>
			<label class="radio-inline">
				{!! Form::radio('bookable', 'format', false) !!} Format
			</label>
		</div>
		<div class="toggle show">
			{!! Form::bootselect('editor_id', 'Editor :', $editors) !!}
		</div>
		<div class="toggle hidden">
			{!! Form::bootselect('format_id', 'Format :', $formats) !!}
		</div>
		<br><hr>
		{!! Form::bootbuttons(url('books')) !!}
	{!! Form::close() !!}
@stop

@section('scripts')
	@include('books.script')
@stop