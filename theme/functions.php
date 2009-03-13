<?php

/*
//default for one sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();
	*/

//left sidebar
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebarleft',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

//right sidebar
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebarright',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));


?>
