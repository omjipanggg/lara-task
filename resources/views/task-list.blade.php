@extends('base')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tasks</li>
  </ol>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					<p>Task-list</p>
				</div>
				<div class="card-body pb-0">
					<form action="{{ url('tasks/create') }}" method="POST">
						@csrf
						<input type="text" class="form-control" name="title" autocomplete="off" placeholder="Enter a new task..." required="true" />
					</form>
					@if (count($data))
					<table class="table table-bordered" id="table-ajax">
					@foreach ($data as $param)
						<tr>
							<td class="del">
								<form action="{{ url('tasks/update', $param) }}" method="POST">
									@csrf
									@method('put')
									<input type="hidden" name="title" value="{{ $param->title }}" />
									<input type="hidden" name="body" value="{{ $param->body }}" />
									<input type="hidden" name="is_done" value="{{ $param->is_done ? 0 : 1 }}" />
								</form>
								<input type="checkbox" value="1" @if ($param->is_done) checked="true" @endif name="is_done" class="chk" />
							</td>
							@if ($param->is_done)
							<td class="task-name striked">{{$param->title}}</td>
							@else
							<td class="task-name">{{$param->title}}</td>
							@endif
							<td class="del">
								<a href="{{ url('tasks/edit', $param) }}"><i class="bi bi-pencil-square"></i></a>
							</td>
							<td class="del">
								<form action="{{ url('tasks/delete', $param) }}" method="POST">
									@csrf
									@method('delete')
								</form>
								<a href="#" class="prevented"><i class="bi bi-trash"></i></a>
							</td>
						</tr>
					@endforeach
					</table>
					@else
					<p class="card-text mb-2">No tasks available yet.</p>
					@endif
				</div>
				<div class="card-footer">
					<p>You have {{ count($data) }} pending tasks.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection