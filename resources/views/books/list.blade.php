@extends('list')

@section('top')
	Books list
	{!! link_to_route('books.create', 'Add a book', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Books
@stop

@section('table')
	@foreach ($lines as $book)
		<tr>
			<td>{{ $book->id }}</td>
			<td class="text-primary"><strong>{{ $book->name }}</strong></td>
			<td>{!! link_to_route('books.show', 'See', [$book->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('books.edit', 'Update', [$book->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['books.destroy', $book->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this book ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop