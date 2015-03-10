@extends('list')

@section('top')
	Periods list
	{!! link_to_route('periods.create', 'Add a period', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Periodes
@stop

@section('table')
	@foreach ($lines as $period)
		<tr>
			<td>{{ $period->id }}</td>
			<td class="text-primary"><strong>{{ $period->name }}</strong></td>
			<td>{!! link_to_route('periods.show', 'See', [$period->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('periods.edit', 'Update', [$period->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['periods.destroy', $period->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this period ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop

