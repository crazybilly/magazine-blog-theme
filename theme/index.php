<?php

//grab header.php
get_header();

//start The Loop
if (have_posts()) :
   while (have_posts()) :
      the_post(); 
?>
	
<div class="location">
	<h2>
		<? //do individual pages? or write a function and just index? the_category ?>



<? endwhile; else ?>

	<p><? _e('No posts found.'); ?></p>

<?endif; ?>

</div>

<?
get_sidebar();
get_footer(); 
?>

