@extends('form')

@section('form')
	{!! Form::open(['route' => 'themes.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Create a theme') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}<br><hr>
		<div id="cats"></div>
		<div class="row">
			<button id="add_cat" type="button" class="btn btn-primary pull-right">Add a categorie</button>
		</div>
		<br><hr>
		<div id="pers"></div>
		<div class="row">
			<button id="add_per" type="button" class="btn btn-primary pull-right">Add a period</button>
		</div>
		<br><hr>
		{!! Form::bootbuttons(url('themes')) !!}
	{!! Form::close() !!}
@stop

@section('scripts')
	@include('themes.script')
@stop
