@extends('app')

@section('content')

	<h1>Types</h1>
	
	<div class="row">
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
	</div>
	<div class="row">
		<form class="form-inline">
			<div class="form-group">
				<input id="add_value" type="text" name="type" class="form-control" 
					data-url="/type/add" aria-describedby="helpBlock2">
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