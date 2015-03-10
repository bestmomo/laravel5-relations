@extends('list')

@section('top')
	Countries list
	{!! link_to_route('countries.create', 'Add a country', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Countries
@stop

@section('table')
	@foreach ($lines as $country)
		<tr>
			<td>{{ $country->id }}</td>
			<td class="text-primary"><strong>{{ $country->name }}</strong></td>
			<td>{!! link_to_route('countries.show', 'See', [$country->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('countries.edit', 'Update', [$country->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['countries.destroy', $country->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this country ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop

