<?php
/**
 * The Template for displaying all single posts
 */

get_header();

	

?>
	<?php 
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); 
	?>

	<?php the_large_title(); ?>

	<div id="content" class="wrap group content-narrow" role="main">
		<?php the_content(); ?>
		<hr>
		<p class="quiet">Posted by <?php print get_the_author_link() ?> in <?php print get_the_category_list( ', ' ) ?>.</p>
	</div><!-- #content -->
	<?php
		endwhile;
	endif;
	?>

<?php

get_footer();

?>