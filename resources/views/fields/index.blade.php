@extends('app')

@section('content')

	<h1>Fields</h1>

	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Actions</th>
		</tr>
		
		@foreach ($fields as $field)
			<tr>
				<td>{{ $field->id }}</td>
				<td>{{ $field->name }}</td>
				<td>
					<a href="{{ action('FieldsController@delete', [$field->id]) }}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		@endforeach
		
	</table>

@endsection