@extends('layouts.Design');

@section('title')
 WELCOME!!
@endsection

@section('content')
   <div class="row">
   		<div class="col-md-6">
   			<h3>Sign Up</h3> 
   	        <form action="{{ route('login')}}" method='POST'>		
   	        	<div class="form-group">
   	        	  <label for="email">Your E-mail</label>
   	        	  <input class="form-control" type="text" name="email" id="email">
   	        	 </div>
   	        	 <div class="form-group">
   	        	  <label for="name">Your Name</label>
   	        	  <input class="form-control" type="text" name="name" id="name">
   	        	 </div>
   	        	 <div class="form-group">
   	        	  <label for="password">Password</label>
   	        	  <input class="form-control" type="password" name="password" id="password">
   	        	  <input type="hidden" name="_token" value="{{Session::token()}}">
   	        	 </div>
   	        	<button type="submit" class="btn btn-primary">SUBMIT</button>
   		</div>
   			<h3>Sign In</h3>	
   		   		<div class="col-md-6"> 
   	        <form action='#' method='POST'>		
   	        	<div class="form-group">
   	        	  <label for="email">Your E-mail</label>
   	        	  <input class="form-control" type="text" name="email" id="email">
   	        	 </div>
   	        	 <div class="form-group">
   	        	  <label for="password">Password</label>
   	        	  <input class="form-control" type="password" name="password" id="password">
   	        	 </div>
   	        	<button type="submit" class="btn btn-primary">SUBMIT</button>
   		</div>

	</div>


@endsection