@extends ('layouts.master')

@section ('content')
	<div class="col-md-8">
		<h1>Register</h1>

		<form method="POST" action="/register">

			{{ csrf_field() }}

			<div class="form-group">
				@include ('layouts.errors')
			</div>

			<div class="form-group">
				<label>Name:</label>
				<input type="text" class="form-control" id="name" name="name" />
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="email" class="form-control" id="email" name="email" required="required" />
			</div>

			<div class="form-group">
				<label>Password:</label>
				<input type="password" class="form-control" id="password" name="password" required="required" />
			</div>

			<div class="form-group">
				<label>Password Confirmation:</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required="required" />
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>


		</form>
		
	</div>

@endsection