@extends('inicio')
@section('title')
Lower
@stop
@section('content')
	<center><h1>Lower Tricks</h1></center>
	<div id="TrickDescription">
		<h3>List of lower tricks</h3>
		@foreach($tricks as $trick)
		<article>
			<b>Trick: </b>{{$trick->id}}<br>
			<b>Name: </b>{{$trick->name}}<br>
			<b>Initials: </b>{{$trick->initials}}<br>
			<b>Style: </b>{{$trick->style}}<br>
			<b>Description: </b>{{$trick->description}}<br>
		</article>
		@endforeach		
	</div>
	<div id="VideoTrick">
		<video width="100%" height="100%" controls>
			<source src="videos/luca.mp4" type="video/mp4">
		</video>
	</div>		
@stop
	