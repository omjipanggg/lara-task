@extends('base')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/tasks/">Tasks</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<form action="{{ url('tasks/update', $data->id ) }}" method="POST">
				@csrf
				@method('put')
				<input type="text" value="{{ $data->title }}" class="form-control" placeholder="Title" name="title" />
				<textarea name="body" id="task-body" cols="30" rows="10" class="form-control" placeholder="Description (optional)">{{ $data->body }}</textarea>
				<div class="input-group mb-2">
					<label for="is_done">Completed:</label>
					@if ($data->is_done === 0)
					<input type="checkbox" name="is_done" value="1" />
					@else
					<input type="checkbox" name="is_done" checked="true" value="1" />
					@endif
				</div>
				<input type="submit" class="btn btn-dark" />
			</form>
		</div>
	</div>
</div>
@endsection