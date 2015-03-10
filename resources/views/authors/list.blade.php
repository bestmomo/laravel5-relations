@extends('list')

@section('top')
	Authors list
	{!! link_to_route('authors.create', 'Add an author', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Authors
@stop

@section('table')
	@foreach ($lines as $author)
		<tr>
			<td>{{ $author->id }}</td>
			<td class="text-primary"><strong>{{ $author->name }}</strong></td>
			<td>{!! link_to_route('authors.show', 'See', [$author->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('authors.edit', 'Update', [$author->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['authors.destroy', $author->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this author ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop

