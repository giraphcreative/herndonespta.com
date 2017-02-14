<?php

/*
Template Name: Page - Narrow
*/

get_header();

?>

	<?php the_showcase(); ?>

	<?php the_large_title(); ?>
	
	<div id="content" class="wrap group content-narrow" role="main">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				the_content();
			endwhile;
		endif;
		?>
	</div><!-- #content -->

<?php

get_footer();

?>