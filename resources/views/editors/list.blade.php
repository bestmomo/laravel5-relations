@extends('list')

@section('top')
	Editors list
	{!! link_to_route('editors.create', 'Add an editor', null, ['class' => 'btn btn-info pull-right']) !!}
@stop

@section('title')
	Editors
@stop

@section('table')
	@foreach ($lines as $editor)
		<tr>
			<td>{{ $editor->id }}</td>
			<td class="text-primary"><strong>{{ $editor->name }}</strong></td>
			<td>{!! link_to_route('editors.show', 'See', [$editor->id], ['class' => 'btn btn-success btn-block']) !!}</td>
			<td>{!! link_to_route('editors.edit', 'Update', [$editor->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['editors.destroy', $editor->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Realy delete this editor ?\')']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
@stop

