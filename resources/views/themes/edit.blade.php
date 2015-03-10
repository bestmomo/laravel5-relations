@extends ('form')

@section('form')
	{!! Form::model($theme, ['route' => ['themes.update', $theme->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
		{!! Form::bootlegend('Update theme') !!}
		{!! Form::boottext('name', 'Name :', $errors) !!}<br><hr>
		<div id="cats">
			@for ($i = 0; $i < count($theme->categories); $i++)
				{!! Form::bootselectbutton('categories', $i, 'Category :', $categories, $theme->categories[$i]->id) !!}				  
			@endfor
		</div>
		<div class="row">
			<button id="add_cat" type="button" class="btn btn-primary pull-right">Add a category</button>
		</div>
		<br><hr>
		<div id="pers">
			@for ($i = 0; $i < count($theme->periods); $i++)
				{!! Form::bootselectbutton('periods', $i, 'Period :', $periods, $theme->periods[$i]->id) !!}				  	
			@endfor
		</div>
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