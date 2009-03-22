<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" >

	<title><? bloginfo('name'); ?> <? wp_title(); ?></title>
	<link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

	<link rel="icon" type="image/ico" href="<?php bloginfo('url')?>/favicon.ico" >
	<link rel="alternate" type="application/rss+xml" title="<? bloginfo('name'); ?> RSS Feed" href="<? bloginfo('rss2_url'); ?>" >
	<link rel="pingback" href="<? bloginfo('pingback_url') ?>" >

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
<!--	<script src="<? //bloginfo('stylesheet_directory')?>/scripts/drop-down.js" type="text/javascript"></script> -->


<script type="text/javascript">
sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

</script>



<? wp_head(); ?>

</head>

<body>
	<div class="container">
		<div class="header">
			<h1><a href="<? bloginfo('url') ?>"><? bloginfo('name'); ?></a></h1>

			<ul id="tabs">
				<li><a href="<? bloginfo('url') ?>">Home</a></li>
				<li><a href="<? bloginfo('url') ?>/page.php?id=36">About</a></li>
				<li><a href="#">Pages</a>
							<ul>
								<? wp_list_pages('title_li='); ?>
							</ul>
				</li>
				<li id="archivetab">
					<? echo archivemenu('Archives') ?>
				</li>
				
				<!--<li id="archivetab">
					<select name=\"archive-dropdown\" onChange='document.location.href=this.options[this.selectedIndex].value;'> 

					  <option value=\"\">
					  	
						<?php //echo attribute_escape(__('Archives')); ?>
					  
					  </option> 
						
					  <?php //wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> 
					
					</select>

				</li>
				<li id="subscribetab"><a href="<? //bloginfo('rss2_url'); ?>"><img src="<? //bloginfo('stylesheet_directory')?>/images/rss.png">Subscribe</a></li>
				<li id="searchtab">
					<input type="text" id="searchbar" name="s" value="listen for..."/>
					<input type="submit" value="Search" id="searchsubmit"/>
-->
			</ul>
		</div>

		<div class="contentoutside">

