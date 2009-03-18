<div class="sidebar">
	<div id="sidebarleft">
<? 

//if you're on the homepage

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
	endwhile; else: 
	endif;


//if you're not on the homepage
	//get left sidebar
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) :

	endif;

?>
</div>


<div id="sidebarright">
<?

	//get sidebar right
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : 

	endif;

?>
</div>
</div>
