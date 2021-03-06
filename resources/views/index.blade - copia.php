<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@section('title')
		Index
		@show
	</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel="icon" href="images/logo.png">
</head>
<body>
	<!--script type="text/javascript" src="js/jquery-3.2.1.min.js"></script-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<!--script type="javascript" src="js/jquery.flexslider-min.js"></script-->
	<!--script src="//content.jwplatform.com/libraries/wr6i4gal.js"></script-->
	<header id="header">
		<a href="/tricks"><img id="logo_page" src="images/favicon.png" width="150px" height="70px"></a>My freestyle videos
	</header>
	<!--nav class="navbar navbar-expand-lg navbar-light bg-light"-->
	<nav class="navbar navbar-expand-sm bg-light">
		<ul class="navbar-nav">
			<a class="nav-link" href="/tricks">Index</a><!--Index=Lower-->
			<a class="nav-link" href="#footer">Upper</a>
			<a class="nav-link" href="/groundmove">Groundmoves</a>
			<a class="nav-link" href="/tricks/create">Register a new trick</a>
			<li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			    	My videos
			    </a>
		      	<div class="dropdown-menu">
		        	<a class="dropdown-item" href="#">Lower</a>
		        	<a class="dropdown-item" href="#">Upper</a>
		        	<a class="dropdown-item" href="#">Groundmoves</a>
		      	</div>
		    </li>
		</ul>
	</nav><br>
	<section>
		<!--div id="like_button_container"></div-->
		<!--iframe width="560" height="315" src="https://www.youtube.com/embed/IJkMrl4AG8w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe-->
		<!--div class="flexslider">
		  	<ul class="slides">
			    <li>
			      <img src="images/akim.jpg" />
			    </li>
			    <li>
			      <img src="images/luca.jpg" />
			    </li>
			    <li>
			      <img src="images/alekseev.jpg" />
			    </li>
		  	</ul>
		</div-->
		<!--video width="1280" height="720" controls-->
		<!--source src="LUCA - 3REVER.mp4" type="video/mp4"-->
		<!--video width="640" height="360" controls>
			<source src="videos/akim.mp4" type="video/mp4">
		</video-->
		<div id="content">
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
		</div>
	</section>
	<footer id="footer">
		<center>Page made with laravel 5.8</center>
	</footer>
	<!--script type="text/javascript">

		var player = jwplayer("player");

		player.setup({
    	playlist: 'https://cdn.jwplayer.com/v2/media/yp34SRmf',
    	controls: false
		});

		var playBtn = document.getElementById('play');
		var pauseBtn = document.getElementById('pause');

		playBtn.addEventListener('click', function() {
  		player.play(true);
		});

		pauseBtn.addEventListener('click', function() {
  		player.pause(true);
		});

	</script-->
	<script type="text/javascript" >
		//$(window).load(function() {
		$(document).ready(function() {
  			$('.flexslider').flexslider({
    			animation: "slide"
  			});
  		});
	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  	<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
  	<script src="js/like_button.js"></script>
</body>
</html>