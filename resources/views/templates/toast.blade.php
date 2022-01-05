@if (Session::has('status'))
	<div class="alert alert-success fade show" role="alert" id="alert_timer">
		<p>{{ Session::get('status') }}</p>
	</div>
@endif
