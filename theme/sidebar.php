<div class="sidebar">
<div id="sidebarleft">

	<? 
	if (is_home ()) {?>
		
		<h2>Recently</h2><?

				query_posts('showposts=1');
				global $more;
				$more = 0; 

				//start the loop
				if (have_posts()) :
				   while (have_posts()) :
			    	  the_post(); 	

					//mini-excerpt	
						$excerpt = get_the_excerpt();
						echo string_limit_words($excerpt,25); 

						?><p class="readmore"><a href="<? the_permalink(); ?>">read more&hellip;</a></p><?

				//close the loop
				endwhile; endif;

		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) :
			//use below function in a text thingy
			endif;

	} else {
		//#2 = sidebarleft for !home
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) :

		endif;
		}
?>
</div>

<!--now for the right sidebar -->
<div id="sidebarright">

		<h2>About</h2>

				<?php bloginfo('description'); ?> 
<?
	if (is_home ()) {
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) :
			?>
		<?endif;

	} else {
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) :

		endif;} ?>

</div>


</div>

