<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/css/main.css">
	<link rel="stylesheet" type="text/css" href="styles/css/utility.css">
	<script src="script/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<header>
	<div class="landing-page">
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
			<li><span class="separator"><a href="index.php"><i><img class="pflimage" height="150px" width="150px" src="img/profile.jpg"></i></a>We Are Creator</span></li>
			<li><a href="wac_services.php">Nos services</a></li>
			<li><a href="wac_works.php">Nos travaux</a></li>
			<li><a href="wac_contact.php">Contactez-nous</a></li>
			<li>
				<div class="dn db-l mr6-l"><form method="post" name="header_search"><label for="header_search_query" class="sr-only">Search Icons:</label> <div class="relative"><input id="header_search_query" type="search" name="header_search_query" value="" placeholder="Search icons..." class="input-reset color-inherit input-focus all-animate br-pill ph4 sans-serif header-search-input ba bw1 bg-gray1 b--gray1"> <button type="submit" name="header_search_submit" class="button-reset color-inherit db o-60 absolute center-v right-1 hover-primary6"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path></svg> <span class="sr-only">Search!</span></button></div> <button type="submit" name="header_search_submit" class="sr-only">Search!</button></form></div>
			</li>
		</ul>
	</nav>
</header>