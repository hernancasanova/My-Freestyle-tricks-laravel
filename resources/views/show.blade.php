@extends('inicio')
@section('content')
		<div id="TrickDescription">
			<h3>Details of trick</h3>
			<article>
				<form action="/tricks/{{$trick->id}}" method="POST">
					@csrf
					@method('PATCH')
					<b>Trick: </b>{{$trick->id}}<br>
					<b>Name: </b><input type="text" name="name" value="{{$trick->name}}" placeholder="Name"><br>
					<b>Initials: </b><input type="text" name="initials" value="{{$trick->initials}}" placeholder="Initials"><br>
					<b>Style: </b><input type="text" name="style" value="{{$trick->style}}" placeholder="Style"><br>
					<b>Description: </b><input type="text" name="description" value="{{$trick->description}}" placeholder="Description"><br>
					<button type="submit" class="btn btn-success mt-1">Save trick</button>
				</form>
				<form action="/tricks/{{$trick->id}}" method="POST">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger mt-1" type="submit">Delete trick</button>
				</form>
			</article>
		</div>
		<div id="VideoTrick">
			<video id="video" width="100%" height="100%" controls>
				<source id="target" src="/videos/{{$trick->initials}}.wmv" type="video/mp4">
			</video>
		</div>	
		<script>
			function reproduc(){
				document.getElementById("target").load();
			}
		</script>
@stop