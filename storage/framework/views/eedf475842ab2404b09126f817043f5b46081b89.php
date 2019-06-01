<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php $__env->startSection('title'); ?>
		Index
		<?php echo $__env->yieldSection(); ?>
	</title>
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel="icon" href="/images/logo.png">
</head>
<body>
	<!--script type="text/javascript" src="js/jquery-3.2.1.min.js"></script-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.easing.js"></script>
	<script type="text/javascript" src="/js/jquery.flexslider.js"></script>
	<!--script type="javascript" src="js/jquery.flexslider-min.js"></script-->
	<!--script src="//content.jwplatform.com/libraries/wr6i4gal.js"></script-->
	<header id="header">
		<a href="/tricks"><img id="logo_page" src="/images/favicon.png" width="150px" height="70px"></a>My freestyle videos
	</header>
	<!--nav class="navbar navbar-expand-lg navbar-light bg-light"-->
	<nav class="navbar navbar-expand-sm bg-light">
		<ul class="navbar-nav">
			<a class="nav-link" href="/index">Index</a><!--Index=Lower-->
			<!--a class="nav-link" href="/groundmove">Groundmoves</a-->
			<a class="nav-link" href="/tricks/create">Register a new trick</a>
			<li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			    	My videos
			    </a>
		      	<div class="dropdown-menu">
		        	<a class="dropdown-item" href="/tricks">Lower</a>
		        	<a class="dropdown-item" href="#">Upper</a>
		        	<a class="dropdown-item" href="#">Groundmoves</a>
		      	</div>
		    </li>
		</ul>
	</nav><br>
	<section>
		<div id="content">
			<?php $__env->startSection('content'); ?>	
			<h2 style="background-color: rgb(250,250,250,.2);">What is freeestyle football?</h2><br>
			<p style="background-color: rgb(250,250,250,.2);">Freestyle football, also known as freestyle soccer in North America, is the art of self-expression with a football, while performing various tricks with any part of the body. Similar in style to keepie uppie, kemari and the ball discipline of rhythmic gymnastics, it has become a widespread sport across the world and is practiced by many people. <code>Source: wikipedia</code></p>
			<h2><center>Goods of lower freestyle</center></h2>
			<div class="video">
				<video id="luca" width="380" height="380" controls>
					<source src="/videos/luca.mp4" type="video/mp4">
				</video><center><b>luca</b></center>
			</div>
			<div class="video">
				<video id="alekseev" width="380" height="380" controls>
					<source src="/videos/alekseev.mp4" type="video/mp4">
				</video><center><b>alekseev</b></center>
			</div>
			<div class="video">
				<video id="akim" width="380" height="380" controls>
					<source src="/videos/akim.mp4" type="video/mp4">
				</video><center><b>akim</b></center>
			</div>
			<!--center><h1>Lower Tricks</h1></center-->
			<!--div id="TrickDescription">
			</div>
			<div id="VideoTrick">
				<video width="100%" height="100%" controls>
					<source src="videos/luca.mp4" type="video/mp4">
				</video>
			</div-->
			<?php echo $__env->yieldSection(); ?>	
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
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  	<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
  	<script src="/js/like_button.js"></script>
</body>
</html><?php /**PATH C:\Users\Hernan Casanova\Desktop\pruebas\laravel\MVF2\MVF\resources\views//inicio.blade.php ENDPATH**/ ?>