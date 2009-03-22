<?php
/*
//default for one sidebar
if ( function_exists('register_sidebar') )
	register_sidebar();*/
	

//left sidebar for home
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebarleft_home',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

//left sidebar for !home
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebarleft_default',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));


//right sidebar for home
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebarright_home',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

//right sidebar for default
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebarright_default',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));


function location () {
	
	if (is_archive() && !is_category() && !is_tag()) {
		return "Archives";
	}
	
	if (is_search()) {
		return "Search Results";
	}

	if (is_404 ()) {
		return "404 - nothing found";
	}

	if (is_tag ()) {
		return single_tag_title();
	}

	if (is_category()) {

	//think about replacing this with just the cat names?	
		$locations = Array (
		"Linux" 								=>	Array (3,"linux","Linux"),
		"Religion &amp; Philosophy"				=>	Array (4,"religion","Religion"),
		"Interesting Links" 					=>	Array (5,"links","Links"),
		"Art &amp; Faith"						=>	Array (6,"art","Art"),
		"Life &amp; Family"						=>	Array (7,"life","Life"),
		"Computers, Web &amp; Other Technology"	=>	Array (8,"tech","Tech")
		);

		foreach ($locations as $key => $options) {
			if (is_category($options)) {
				return $key;
			}
		}
	}
}

/*
*  Create the Archives pulldown
*  relies on permalinks like /YYYY/MM
*
*/

function archivemenu ($title) {

	//set title if it's not already
	if (!$title) {
		$title = "Archives";
		}

	//write the intro
	$intro = '<a href="#">'.$title.'</a>';

	//get the arrays ready
	
		//figure out the first post
		//function from http://www.thisismyurl.com/tutorials/wordpress-help/generating-a-dynamic-copyright-notice-in-wordpress/
		global $wpdb;

		$posts = $wpdb->get_results("SELECT YEAR(post_date_gmt) AS year FROM $wpdb->posts WHERE post_date_gmt > 1970 ORDER BY post_date_gmt ASC");

		$last = $posts[count($posts)-1]->year;

		$first = $posts[0]->year;
	
	
	$months = Array (
		'01' => 'January',
		'02' => 'February',
		'03' => 'March',
		'04' => 'April',
		'05' => 'May',
		'06' => 'June',
		'07' => 'July',
		'08' => 'August',
		'09' => 'September',
		'10' => 'October',
		'11' => 'November',
		'12' => 'December',
		);
	
	$years = Array ();
		while ($first <= $last) {
			$years[] = $first;
			$first++;
			}
	

	//write the list, sans the outer ul tags
		foreach ($years as $val) {
			//add the li for the year 
			$list = $list.'
				<li><a href="'.$val.'">'.$val.'</a>
					<ul>';
				//add the lis for each month
					foreach ($months as $key => $mon_val) {
						$list = $list.'
							<li><a href="'.$val.'/'.$key.'">'.$mon_val.'</a></li>';
							}
			//close the monthly ul and the yearly lie
			$list = $list.'</ul></li>';
			}

	$all = $intro."<ul>".$list."</ul>";
	
	return $all;

/*
Just for Reference
		$intro = <a href="#">Archives
		$list =	<li><a href="2008">2008</a>
					<ul>
						<li><a href="2008/01">January</a>
						<li><a href="2008/02">Feb</a>
					</ul></li>
*/
}	






?>
