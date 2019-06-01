
@extends('inicio')
@section('title')
Register a new trick
@stop
@section('content')
	<center><h1>Form to register a new trick</h1></center>
	<div id="FormRegister">
		<form action="/" method="post">
			Name: <input type="text" name="name"><br>
			Initials: <input type="text" name="initials"><!--br>
			Style: <select name="style" id="selecStyle">
				<option value="lower">lower</option>
				<option value="upper">upper</option>
				<option value="sitdown">sitdown</option>
				<option value="groundmove">groundmove</option>
			</select--><br>
			Style: <input type="text" name="style"><br>
			Description: <textarea name="description" id="TADescription" cols="30" rows="10"></textarea><br>
			<button type="button" class="btn btn-success">Register</button>
		</form>
	</div>		
@stop
	