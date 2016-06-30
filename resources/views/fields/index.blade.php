@extends('app')

@section('content')

	<h1>Fields</h1>

	<div class="row">
		<table class="table table-hover">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Type</th>
				<th>Actions</th>
			</tr>
			
			@foreach ($fields as $field)
				<tr>
					<td>{{ $field->id }}</td>
					<td>{{ $field->name }}</td>
					<td>{{ $field->type->name }}</td>
					<td>
						<a href="{{ action('FieldsController@delete', [$field->id]) }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			@endforeach
			
		</table>
	</div>

	<div class="row">
		<form class="form-inline">
			<div class="form-group">
				<input id="add_value" type="text" name="type" class="form-control" 
					data-url="/field/add" aria-describedby="helpBlock2">
				<input type="hidden" name="type" id="type_id" value="{{ $type_id }}">
				<button type="submit" class="btn btn-success">Add</button>
				<div class="errors"></div>
			</div>
			
		</form>
	</div>

@endsection

@section('scripts')

	@parent
	<script src="{{ asset('js/app.min.js') }}"></script>
	
@endsection