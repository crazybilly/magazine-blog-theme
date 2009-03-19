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




?>
