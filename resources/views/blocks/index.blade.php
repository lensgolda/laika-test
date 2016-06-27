@extends('app')

@section('content')

	<h1>Blocks</h1>

	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>Actions</th>
		</tr>
		
		@foreach ($blocks as $block)
			<tr>
				<td>{{ $block->id }}</td>
				<td>{{ $block->name }}</td>
				<td>{{ $block->type->name }}</td>
				<td>
					<a href="{{ action('BlocksController@edit', [$block->id]) }}" class="btn btn-danger">Edit</a>
					<a href="{{ action('BlocksController@delete', [$block->id]) }}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		@endforeach
		
	</table>

@endsection