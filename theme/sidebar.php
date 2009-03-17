<div class="sidebar">
<div id="sidebarleft">
	<? 

	if (is_home ()) {
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) :
			//use below function in a text thingy
			?><h2>Recently</h2><?

				query_posts('showposts=1');
				global $more;
				$more = 0; 

				//start the loop
				if (have_posts()) :
				   while (have_posts()) :
			    	  the_post(); 	
	
				/*doing it via the_content	
				 *requires <!--more --> or whatever*/
					  the_content('Read more&#8230;');
		
				//close the loop
				endwhile; endif;
			endif;

	} else {
		//#2 = sidebarleft for !home
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) :

		endif;
		}
?>
</div>

<!--now for the right sidebar -->
<div id="sidebarright"><?

	if (is_home ()) {
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) :
			?><h2>About</h2>

				<p>blogging at the intersection of postmodern Christianity and open source</p>

		<?endif;

	} else {
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) :

		endif;} ?>

</div>


</div>

