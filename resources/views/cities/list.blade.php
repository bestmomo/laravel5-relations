@extends('list')

@section('top')
	Cities list
	{!! link_to_route('cities.create', 'Add a city', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Cities
@stop

@section('table')
	@foreach ($lines as $city)
		<tr>
			<td>{{ $city->id }}</td>
			<td class="text-primary"><strong>{{ $city->name }}</strong></td>
			<td>{!! link_to_route('cities.show', 'See', [$city->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('cities.edit', 'Update', [$city->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['cities.destroy', $city->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this city ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop

