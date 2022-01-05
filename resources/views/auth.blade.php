@extends('base')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Auth</li>
  </ol>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h3>Login</h3>
			<hr/>
			<form action="" method="POST" class="form">
				<input type="text" class="form-control" placeholder="Username" required="true" autocomplete="off" />
				<input type="password" class="form-control" placeholder="Password"  required="true" />
				<button onclick="history.back()" class="btn btn-dark back">Back</button>
				<input type="submit" class="btn btn-outline-dark" value="Login" />
			</form>
			<p class="text-notice">Do not have account yet? <a href="/auth/?page=register">Register</a></p>
		</div>
	</div>
</div>
@endsection