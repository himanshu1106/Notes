@extends('layouts.base')
@section('titile')
Create Notebook
@endsection
@section('content')

<div class="container">

	<h1>Create NoteBook</h1>


	<form action='/notebooks' method="POST">
	{{csrf_field()}}

	<div class="form-group">

		<label for="name">Notebook Name</label>
		<input class="form-control" type="textare" name="name">

	
	</div>
	<input class="btn btn-primary" type="submit" value="Done">
	</form>
</div>

@endsection