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
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>
<!-- <nav class="navbar-fwd">
	<ul>
		<li>A</li>
		<li>B</li>
		<li>C</li>
	</ul>
</nav> -->

<h2>fancybox v3.5 - Initialize with data attributes</h2>

<p>
	Individual images
</p>

<hr class="my-5" />
<p class="imglist">
	<a href="https://source.unsplash.com/IvfoDk30JnI/1500x1000" data-fancybox data-caption="&lt;b&gt;Single photo&lt;/b&gt;&lt;br /&gt;Caption can contain &lt;em&gt;any&lt;/em&gt; HTML elements">
		<img src="https://source.unsplash.com/IvfoDk30JnI/240x160" />
	</a>

	<a href="https://source.unsplash.com/0JYgd2QuMfw/1500x1000" data-fancybox data-caption="This image has a simple caption">
		<img src="https://source.unsplash.com/0JYgd2QuMfw/240x160" />
	</a>

	<a href="https://source.unsplash.com/xAgvgQpYsf4/1500x1000" data-fancybox>
		<img src="https://source.unsplash.com/xAgvgQpYsf4/240x160" />
	</a>
</p>

<div class="main">
	<h2>fancybox - Using trigger element </h2>

	<hr class="my-5"></hr>

	<p class="imglist" style="max-width: 520px;">
		<a data-fancybox-trigger="preview" href="javascript:;">
			<img src="https://source.unsplash.com/LuK-MuZ-yf0/510x340" />
		</a>

		<a href="https://source.unsplash.com/LuK-MuZ-yf0/1500x1000" data-fancybox="preview" data-width="1500" data-height="1000">
			<img src="https://source.unsplash.com/LuK-MuZ-yf0/120x80" />
		</a>

		<a href="https://source.unsplash.com/Oaqk7qqNh_c/1500x1000" data-fancybox="preview" data-width="1500" data-height="1000">
			<img src="https://source.unsplash.com/Oaqk7qqNh_c/120x80" />
		</a>

		<a href="https://source.unsplash.com/X9GHkHbJIaU/1500x1000" data-fancybox="preview" data-width="1500" data-height="1000">
			<img src="https://source.unsplash.com/X9GHkHbJIaU/120x80" />
		</a>

		<a href="https://source.unsplash.com/9c_djeQTDyY/1500x1000" data-fancybox="preview" data-width="1500" data-height="1000">
			<img src="https://source.unsplash.com/9c_djeQTDyY/120x80" />
		</a>
	</a>
</div>

<!-- Inclusion de vidéo -->
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

			<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="jquery.fancybox.min.js"></script>
</body>
</html>