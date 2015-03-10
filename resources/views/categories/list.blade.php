@extends('list')

@section('top')
	Categories list
	{!! link_to_route('categories.create', 'Add a category', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Categories
@stop

@section('table')
	@foreach ($lines as $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td class="text-primary"><strong>{{ $category->name }}</strong></td>
			<td>{!! link_to_route('categories.show', 'See', [$category->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('categories.edit', 'Update', [$category->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this category ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop

