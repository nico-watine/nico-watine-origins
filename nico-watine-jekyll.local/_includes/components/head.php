<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="en-US">
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="{{ site.cdn_url }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ page.page-title }} | Houston Web Designer</title>
	<meta name="description" content="{{ page.page-description }}" />
	<link rel="canonical" href="http://nicowatine.me{{ page.page-url }}" />
	<link rel="author" href="/humans.txt">

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{{ page.og-title }}" />
	<meta property="og:description" content="{{ page.og-description }}" />
	<meta property="og:url" content="http://nicowatine.me{{ page.page-url }}" />
	<meta property="og:image" content="{{ site.cdn_url }}{{ page.og-image }}" />

	<link rel="stylesheet" href="{{ site.cdn_url }}<?php autoVer('/css/style.css'); ?>"/>
</head>