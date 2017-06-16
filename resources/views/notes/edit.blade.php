  @extends('layouts.base')
@section('titile')
Edit Notebook
@endsection
@section('content')

<div class="container">

	<h1>Edit NoteBook</h1>


	<form action="{{route('notes.update',$note->id)}}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
<div class="form-group">

		<label for="title">Notes title</label>
		<input class="form-control" type="text" name="title" value="{{$note->title}}">
	</div>
	<div class="form-group">
		<label for="body">Notes Body</label>
		<input class="form-control" type="text" name="body" value="{{$note->body}}">
	</div>
	 
	<input class="btn btn-primary" type="submit" value="Done">
	</form>
	</form>
</div>

@endsection