<?php 



?>

<!DOCTYPE html>
<html>
<head>
	<title>WA Creator || Visite virtuel de nos locaux</title>
	<link rel="shortcut icon" type="favicon/ico" href="../../img/favicon.ico">
	<meta charset="utf-8">
	<meta http-equiv="xua-compatible" content="ie-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../styles/css/main.css" media="all">
	<link rel="stylesheet" type="text/css" href="../../styles/css/utility.css" media="all">
	<script src="../../script/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="../../fancybox/dist/jquery.fancybox.min.css" />
	<script src="../../fancybox/dist/jquery.fancybox.min.js"></script>
</head>

<header>
	<nav class="navbar-fwd">
		<ul>
			<li>A</li>
			<li>B</li>
			<li>C</li>
		</ul>
	</nav>
</header>

<body>

<div class="main">
	<div class="block">
		<h2>fancybox - Using trigger element </h2>

		<span class="my-5"></span>

		<a data-fancybox-trigger="preview" href="javascript: $([#mosaic]).style(display:all) ;">
			Visionner
		</a>

		<div class="mosaic" style="display: none;">
				

				<a data-fancybox="preview" href="files/a.png">
					<img src="files/a.png" />
				</a>

				<a href="files/b.png" data-fancybox="preview" data-width="500" data-height="400">
					<img src="files/b.png" />
				</a>

				<a href="files/c.png" data-fancybox="preview" data-width="500" data-height="400">
					<img src="files/c.png" />
				</a>

				<a href="files/d.png" data-fancybox="preview" data-width="500" data-height="400">
					<img src="files/d.png" />
				</a>

				<a href="files/e.png" data-fancybox="preview" data-width="500" data-height="400">
					<img src="files/e.png" />
				</a>
		</div>
	</div>

	<!-- Inclusion de vidéo -->
	<div class="block">
		<a data-fancybox href="https://www.youtube.com/watch?v=hGBtCfiSL5o" data-caption="What sin - Morgan Cryar">
		YouTube video
		</a><br>

		<a data-fancybox href="https://vimeo.com/191947042">
			Vimeo video
		</a><br>

		<a data-fancybox data-width="auto" data-height="auto" href="video.mp4">
			Direct link to MP4 video
		</a><br>

		<a data-fancybox href="#myVideo">
			HTML5 video element
		</a><br>

		<video width="640" height="320" controls id="myVideo" style="display:none;">
			<source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.mp4" type="video/mp4">
			<source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.webm" type="video/webm">
			<source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.ogv" type="video/ogg">
					Your browser doesn't support HTML5 video tag.
		</video>
	</div>
</div>
	

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="jquery.fancybox.min.js"></script>
</body>
</html>