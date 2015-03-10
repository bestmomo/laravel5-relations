@extends('form')

@section('form')
	{!! Form::open(['route' => ['books.update', $book->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Update a book') !!}<br>
		{!! Form::boottext('name', 'Name :', $errors, $book->name) !!}<br>
		{!! Form::bootselect('theme_id', 'Theme :', $themes) !!}<br>
		@for ($i = 0; $i < count($book->authors); $i++)
			{!! Form::bootselectbutton('authors', 1, 'Author :', $authors, $book->authors[$i]->id) !!}	
		@endfor			  	
		<div class="row">
			<button id="add" type="button" class="btn btn-primary pull-right">Add an author</button>
		</div>
		<br>
		<div class="row form-group">
			<label class="radio-inline">
				{!! Form::radio('bookable', 'editor', $type_editor) !!} Editor
			</label>
			<label class="radio-inline">
				{!! Form::radio('bookable', 'format', !$type_editor) !!} Format
			</label>
		</div>
		<div class="toggle {{ $type_editor? 'show' : 'hidden' }}">
			{!! Form::bootselect('editor_id', 'Editor :', $editors, $book->bookable->id) !!}
		</div>
		<div class="toggle {{ $type_editor? 'hidden' : 'show'}}">
			{!! Form::bootselect('format_id', 'Format :', $formats, $book->bookable->id) !!}
		</div>
		<br><hr>
		{!! Form::bootbuttons(url('books')) !!}
	{!! Form::close() !!}
@stop

@section('scripts')
	@include('books.script')
@stop