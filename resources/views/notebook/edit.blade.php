  @extends('layouts.base')
@section('titile')
Edit Notebook
@endsection
@section('content')

<div class="container">

	<h1>Edit NoteBook</h1>


	<form action='/notebooks/{{$notebook->id}}' method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}

	<div class="form-group">

		<label for="name">Notebook Name</label>
		<input class="form-control" type="text" name="name">

	
	</div>
	<input class="btn btn-primary" type="submit" value="UPDATe">
	</form>
</div>

@endsection