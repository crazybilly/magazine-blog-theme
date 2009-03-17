<?php

//grab header.php
get_header();

?>
		<div class="content" 
			<? if (is_front_page() ) { ?> id="index" <? } ?> >

			<ul class="categories">
				<? wp_list_categories('title_li='); ?>
			</ul>

		</div>


<?
get_sidebar();
get_footer(); 
?>

