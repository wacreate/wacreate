<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/css/main.css">
	<link rel="stylesheet" type="text/css" href="styles/css/utility.css">
	<script src="script/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<header>
	<div class="landing-page">
		<div class="pflimage">
			<img src="img/profile.jpg">
		</div>
		<div class="page-content">
			<h1><?php echo $object; ?></h1>
			<p>
				Nous développons et créons pour VOUS, VOUS développez pour NOUS !
			</p>
			<a id="cta-wc" href="#">Passer à l'acte</a>
		</div>
	</div>

	<nav class="navbar-fwd">
		
		<ul>
			<li><span class="separator"><a href="index.php"><i>#</i></a>We Are Creator</span></li>
			<li><a href="wac_services.php">Nos services</a></li>
			<li><a href="wac_works.php">Nos travaux</a></li>
			<li><a href="wac_contact.php">Contactez-nous</a></li>
			<li>
				<div class="search">
					<input type="text" name="fwdsearch" class="input-std" placeholder="Tapez pour rechercher">
				<button class="fwdsearch-btn">
					<span><img src=""></span>
				</button>
				</div>
			</li>
		</ul>
	</nav>
</header>