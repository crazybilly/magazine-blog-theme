<?php

//grab header.php
get_header();

?>


			<ul class="categories">
				<? wp_list_categories('title_li='); ?>
			</ul>

		</div>


<?
//get_sidebar();
get_footer(); 
?>

