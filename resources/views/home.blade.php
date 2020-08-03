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
		<h3 class="text-center">Available Records</h3>
		<table class="table table-striped table-hover table-sm table-bordered table-active">
			<tr class="thead bg-dark text-light">
				<td>Id</td>
				<td>Name</td>
				<td>E-Mail</td>
				<td>City</td>
				<td>Delete</td>
				<td>Edit</td>
			</tr>

			@foreach($users->all() as $user)

			<tr class="tbody bg-white">
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->city}}</td>
				<td class="text-center"><a href="{{ url('delete') }}?id={{$user->id}}" class="btn btn-danger btn-sm">Delete</a></td>
				<td class="text-center"><a href="{{ url('edit') }}?id={{$user->id}}" class="btn btn-success btn-sm">Edit</a></td>
			</tr>
			@endforeach
			<form action="create" method="POST">
			<tr>
				@csrf
				<td><input type="text" name="id" value="{{$user->id+1 ?? ''}}"></td>
				<td><input type="text" name="name" placeholder="Name"></td>
				<td><input type="text" name="email" placeholder="E-Mail"></td>
				<td><input type="text" name="city" placeholder="City"></td>
				<td colspan="2"><input type="submit" value="Add New" class="btn btn-sm btn-block btn-primary"></td>
			</tr>
			</form>
		</table>

		@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
		@endforeach

		@if(session()->get('success') != null)

		<div class="alert alert-success">
			{{ session()->get('success')}}
		</div>
		
		@endif
</div>
</body>
</html>