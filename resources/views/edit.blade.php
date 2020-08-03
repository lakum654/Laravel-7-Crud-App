<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/boostrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container-fluid bg-light">
		<h3 class="text-center">Edit Records</h3>
		
	

	<div class="container w-50 bg-white"><br><br>
		<form action="update" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{$user->id}}">
		<input type="text" name="name" value="{{$user->name}}" class="form-control form-control-sm"><br>
		<input type="text" name="email" value="{{$user->email}}" class="form-control form-control-sm"><br>
		<input type="text" name="city" value="{{$user->city}}" class="form-control form-control-sm"><br>
		<input type="submit" value="Update" class="btn btn-sm btn-info btn-block"><br>
	</div>
	</form>	
</div>
</body>
</html>