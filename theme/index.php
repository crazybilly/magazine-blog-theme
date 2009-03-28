<?

//grab header.php
get_header();

//Location div ?>
<div class="location <? if (is_page() ) { echo 'hidden'; } ?> ">

	<h2><? echo location() ?></h2>
	<h3 id="search_string" class= " <? if (!is_search()) { echo 'hidden'; } ?> ">'<? the_search_query() //might also use get_search_query() ?>'</h3>

</div>
<div class="content">

<?
//start the Loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="post">
<?//Start the post?>

<a href="<? the_permalink(); ?>"><?the_title('<h2>','</h2>');?></a>
<?the_date  ('m.d.y', '<h4>','</h4>');?>

	<div class="post-content">
		<? the_content () ?>
	</div>

		<div class="post-meta">
			Posted in <? the_category (', ') ?> | <a href="<? comments_link(); ?>"><? comments_number() ?></a>
						<br>
				<? the_tags('Tags:',', '); ?>
		</div>

<!--the post-->
</div>

<?//close the loop
endwhile; else: ?>
	<div class="post">
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<!--the post-->
	</div>
<?php endif; ?>

<!--content-->
</div>
<!--contentoutside-->
</div>

<?
get_sidebar();
get_footer(); 
?>
