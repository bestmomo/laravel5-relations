@extends('list')

@section('top')
	Themes list
	{!! link_to_route('themes.create', 'Add a theme', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Themes
@stop

@section('table')
	@foreach ($lines as $theme)
		<tr>
			<td>{{ $theme->id }}</td>
			<td class="text-primary"><strong>{{ $theme->name }}</strong></td>
			<td>{!! link_to_route('themes.show', 'See', [$theme->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('themes.edit', 'Update', [$theme->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['themes.destroy', $theme->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this theme ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop