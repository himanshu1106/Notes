@extends('layouts.base')
@section('title')
Notes
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div>
			<h3 class="display-3">
				{{$note->title}}
			</h3>
			<div>
			{{$note->body}}

			</div>
		</div>
		
	</div>

</div>
@endsection`