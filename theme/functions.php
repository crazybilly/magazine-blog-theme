<?php

/*
//default for one sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();
	*/

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

$locations = Array (
	linux = "Linux",
	religion = 	"Religion &amp; Philosophy",
	links = 	"Interesting Links",
	art	=		"Art &amp; Faith",
	life = 		"Life &amp; Family",
	tech = 		"Computers, Web &amp; Other Technology"
	);





?>

