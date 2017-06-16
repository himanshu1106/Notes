@extends('layouts.base')
@section('title')
Create Notes
@endsection

<!-- <div class="container">
                <h1 class="pull-xs-left">
                    CreatesNotes<br>
                </h1>
 <form action="{{route('notes.store')}}" method="POST">
{{csrf_field()}}
	<div class="form-group">
	<label for="title">Notes Title</label>
	<input class="form-control" type="text" name="title">
	</div>
	<div class="form-group">
	<label for="body">Notes Body</label>
	<input class="form-control" type="text" name="body">
	</div>
	<input class="btn btn-primary" type="submit" value="Done">

 </form>
 </div> -->

@section('content')

<div class="container">

	<h1>Create NoteBook</h1>


	<form action="{{route('notes.store')}}" method="POST">
	{{csrf_field()}}

	<div class="form-group">

		<label for="title">Notes title</label>
		<input class="form-control" type="text" name="title">
	</div>
	<div class="form-group">
		<label for="body">Notes Body</label>
		<input class="form-control" type="text" name="body">
	</div>
	<input type="hidden" name="notebook_id" value="{{$notebookId}}">
	<input class="btn btn-primary" type="submit" value="Done">
	</form>
</div>

<!-- <div class="container">
                <h1 class="pull-xs-left">
                    CreatesNotes
                </h1>
 <form action="{{route('notes.store')}}" method="POST">
{{csrf_field()}}
	<div class="form-group">
	<label for="title">Notes Title</label>
	<input class="form-control" type="text" name="title">
	</div>
	<div class="form-group">
	<label for="body">Notes Body</label>
	<input class="form-control" type="text" name="body">
	</div>
	<input class="btn btn-primary" type="submit" value="Done">

 </form>
 </div> -->
@endsection