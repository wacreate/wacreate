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
			<li><a href="index.php">We Are Creator</a></span></li>
			<li><a href="../../wac_services.php">Nos services</a></li>
			<li><a href="../../wac_works.php">Nos travaux</a></li>
			<li><a href="../../wac_contact.php">Contactez-nous</a></li>
		</ul>
	</nav>
</header>

<body>

<div class="main">
	<div class="block">
		<h2>fancybox - Using trigger element </h2>

		<span class="my-5"></span>

		<a id="toogler" data-fancybox-trigger="preview" href="javascript:;">
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

<!-- Iframe du visite virtuelle de google street view - La Lavoir - Pour démo -->
<iframe style="display: none;" id="visite-virtuelle" src="https://www.google.com/maps/embed?pb=!4v1554097906172!6m8!1m7!1sCAoSLEFGMVFpcE5SUXAtd2R3Vi1hMzlvWlB2M3otbi1oSWplalhzdnJ3azVFWDU3!2m2!1d48.81645181991611!2d2.383636705621711!3f304.5!4f2.933869999999999!5f0.7820865974627469" width="1200" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>


	<div class="block">
			<h2>Visite virtuelle</h2>
				
			<a data-fancybox data-src="#visite-virtuelle" href="javascript:;">
				Visite virtuelle
			</a>
	</div>
</div>
	

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="jquery.fancybox.min.js"></script>
</body>
</html>