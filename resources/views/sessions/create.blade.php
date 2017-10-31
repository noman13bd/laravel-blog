@extends ('layouts.master')

@section ('content')
	<div class="col-md-8">
		<h1>Sign In</h1>

		<form method="POST" action="/login">

			{{ csrf_field() }}

			<div class="form-group">
				@include ('layouts.errors')
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
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>


		</form>
		
	</div>

@endsection