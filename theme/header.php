<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" >

	<title><? bloginfo('name'); ?> <? wp_title(); ?></title>
	<link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

	<link rel="icon" type="image/ico" href="<?php bloginfo('url')?>/favicon.ico" >
	<link rel="alternate" type="application/rss+xml" title="<? bloginfo('name'); ?> RSS Feed" href="<? bloginfo('rss2_url'); ?>" >
	<link rel="pingback" href="<? bloginfo('pingback_url') ?>" >

<? wp_head(); ?>

</head>

<body>
	<div class="container">
		<div class="header">
			<h1><a href="<? bloginfo('url') ?>"><? bloginfo('name'); ?></a></h1>

			<ul class="tabs">
				<li><a href="<? bloginfo('url') ?>">Home</a></li>
				<li><a href="<? bloginfo('url') ?>/page.php?id=36">About</a></li>
				<li><a href="#">Pages</a></li>
				<li id="archivetab"><a href="#">Archives</a></li>
				<li id="subscribetab"><a href="<? bloginfo('rss2_url'); ?>"><img src="<? bloginfo('stylesheet_directory')?>/images/rss.png">Subscribe</a></li>
				<li id="searchtab">
					<input type="text" id="searchbar" name="s" value="listen for..."/>
					<input type="submit" value="Search" id="searchsubmit"/>
			</ul>
		</div>

		<div class="contentoutside">
		<div class="content" 
			<? if (is_front_page() ) { ?> id="index" <? } ?> >

