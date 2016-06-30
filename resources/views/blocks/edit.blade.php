@extends('app')

@section('content')

<h1>Edit {{ $block->name }}</h1>

<div class="row">
	
	<form action="{{ action('BlocksController@update', $block->id) }}" method="POST" class="form-inline">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="block_name" class="form-control" value="{{ $block->name }}">
			<select name="type_id" class="form-control">
				<option selected="{{ $block->type->id }}">{{ $block->type->name }}</option>
				@foreach ($types as $type)
					<option value="{{ $type->id }}">{{ $type->name }}</option>
				@endforeach
			</select>
			<button type="submit" class="btn btn-success">Update</button>
			<span class="help-block"></span>
		</div>
	</form>

	@if($errors->any())
	    <div class="alert alert-danger">
	        @foreach($errors->all() as $error)
	            <p>{{ $error }}</p>
	        @endforeach
	    </div>
	@endif

</div>

@endsection