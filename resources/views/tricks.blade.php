@extends('inicio')
@section('content')
		<div id="TricksDescription">
			<h3>List of tricks</h3>
			@foreach($tricks as $trick)
				<article>
					<b>Trick: </b>{{$trick->id}}<br>
					<b>Name: </b>{{$trick->name}}<br>
					<b>Initials: </b>{{$trick->initials}}<br>
					<b>Style: </b>{{$trick->style}}<br>
					<b>Description: </b>{{$trick->description}}<br>
					<form action="/tricks/{{$trick->id}}" method="GET">
						<button class="btn btn-success">Edit</button>
					</form>
					<button id="reproduce" onclick="reproduce('{{$trick->initials}}')" class="btn btn-primary">See trick</button>
				</article>
			@endforeach	
		</div>
		<div id="VideoTrick">
			<video  id="video" width="100%" height="100%" controls>
				<source id="vid1" type="video/mp4">
			</video>
		</div>	
		<script>
			function reproduce(nomVid){
				document.getElementById("vid1").src="/videos/"+nomVid+".mp4";
				document.getElementById("video").load();
				document.getElementById("video").play();
			}
		</script>
@stop