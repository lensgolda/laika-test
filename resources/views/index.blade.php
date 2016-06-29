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
				<input id="newtype_value" type="text" name="type" class="form-control">
				<button type="submit" class="btn btn-success">Add</button>
			</div>
		</form>
	</div>

@endsection

@section('scripts')

<!-- Применить gulp и заменить путь к скрипту на локальный после сборки -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
	$(document).ready(function () {
		console.log('page loaded...');

		var base_url = 'http://' + window.location.hostname;
		console.log(base_url);

		$('button[type=submit]').on('click', function (e) {
			e.preventDefault();

			$data = {};
			$data.value = $('#newtype_value').val();

			console.log($data);

			$.ajax({
                type: "POST",
                url : base_url + "/type/add",
                data : $data,
                cache: false,
				success: function(data){
				   return data;
				}
            });
            return false;
		});
		
		
	});
</script>

@endsection