@extends('app')

@section('content')

	<h1>Blocks</h1>

	<div class="row">
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
						<a href="{{ action('BlocksController@edit', [$block->id]) }}" class="btn btn-primary">Edit</a>
						<a href="{{ action('BlocksController@delete', [$block->id]) }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			@endforeach
			
		</table>
	</div>

	<div class="row">
		<form class="form-inline">
			<div class="form-group">
				<input id="add_value" type="text" name="block" class="form-control"
					data-url="/block/add" aria-describedby="helpBlock2">
				<select name="type" id="type_id" class="form-control">
					@foreach ($types as $type)
						<option value="{{ $type->id }}">{{ $type->name }}</option>
					@endforeach
				</select>
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