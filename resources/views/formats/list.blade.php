@extends('list')

@section('top')
	Formats list
	{!! link_to_route('formats.create', 'Add a format', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Formats
@stop

@section('table')
	@foreach ($lines as $format)
		<tr>
			<td>{{ $format->id }}</td>
			<td class="text-primary"><strong>{{ $format->name }}</strong></td>
			<td>{!! link_to_route('formats.show', 'See', [$format->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('formats.edit', 'Update', [$format->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['formats.destroy', $format->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this format ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop

