@extends('app')

@section('content')

	<h1>Types</h1>

	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Actions</th>
		</tr>
		
		@foreach ($types as $type)
			<tr>
				<td>{{ $type->id }}</td>
				<td>{{ $type->name }}</td>
				<td>
					<a href="{{ action('FieldsController@show', [$type->id]) }}" class="btn btn-primary">Fields</a>
					<a href="{{ action('TypesController@delete', [$type->id]) }}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		@endforeach
		
	</table>

@endsection