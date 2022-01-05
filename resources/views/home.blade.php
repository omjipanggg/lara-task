@extends('base')
@section('content')
<nav aria-label="breadcrumb" id="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="box">
				<h1>Henlo!&nbsp;<i class="bi bi-emoji-smile-upside-down"></i></h1>
				<p>Welcome to my another web development: <b><abbr title="<3">Misrocite</abbr></b>!</p><p>This website was developed by using <a href="http://laravel.com/">Laravel</a> with a lil bit help from <a href="http://getbootstrap.com/">Bootstrap</a>.</p><p>You can create a simple to-do-list by clicking <a href="/tasks/" class="permalink">here</a> or by navigating from the menu.</p><p>Feel free to look around, and I hope to see you again very soon.</p><p>Stay healthy, and thank you so much for visiting!</p>
			</div>
		</div>
	</div>
</div>
@endsection