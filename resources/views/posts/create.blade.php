@extends ('layouts.master')
@section ('content')
<div class="col-sm-8 blog-main">
	<h1>Create a Post</h1>
	<hr>
	@include ('layouts.errors')
	<form method="POST" action="/post">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" placeholder="Title" name="title" required="" />
		</div>
		<div class="form-group">
			<label for="body">Body</label>
			<textarea class="form-control" id="body" placeholder="Body" name="body" required=""></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection