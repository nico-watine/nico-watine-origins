<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="en-US">
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="http://cdn.nicowatine.me">
	<title>Nico Watine | Houston Web Designer</title>
	<meta name="description" content="My name is Nico, and if you are looking to have a mobile-friendly website designed and coded, I've got you covered.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://nicowatine.me" />
	<meta property="og:title" content="Nico Watine | Houston Web Designer" />
	<meta property="og:image" content="http://cdn.nicowatine.me/img/index/og/retro-splash.jpg" />
	<meta property="og:description" content="My name is Nico, and if you are looking to have a mobile-friendly website designed and coded, I've got you covered." />

	<link rel="stylesheet" href="http://cdn.nicowatine.me<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<link rel="stylesheet" href="http://cdn.nicowatine.me<?php autoVer('/css/ie.css'); ?>">
		<script src="http://cdn.nicowatine.me<?php autoVer('/js/ie-min.js'); ?>"></script>
	<![endif]-->

</head>
<body id="index">

<div class="height-wrapper">
	<header>
		<div class="content">
			<h1 class="title">Nico Watine</h1>
			<h2>A web designer living in <span class="inline-block">Houston, TX</span></h2>
		</div>
	</header>

	<footer>
		<div id="portfolio">
			<h3 class="title">Portfolio</h3>
			<a href="http://studioncreations.com" target="_blank">www.studioncreations.com</a>
		</div>
		<div id="email">
			<h3 class="title">Email</h3>
			<a href="mailto:nico.w@tine.rocks" target="_top">nico.w@tine.rocks</a>
		</div>
	</footer>
</div>

<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='https://www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-55459011-3','auto');ga('send','pageview');
</script>
</body>
</html>