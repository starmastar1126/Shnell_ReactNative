
<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>Home</title>

	<link href="/public/css/app.css" rel="stylesheet" />
	<link href="/public/css/style.css" rel="stylesheet" />
	<link href="/public/css/font-awesome.min.css" rel="stylesheet" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





</head>
<body>

	create user

{!! Form::open(['action' => 'HomeController@users_create_post','method'=>'POST','id'=>'indexpage']) !!}
    @csrf


	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" />
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
		</div>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" />
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


	{!! Form::close() !!}



	<script src="/public/js/popper.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/public/js/app.js"></script>
</body>
</html>
