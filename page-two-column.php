<?php

/*
Template Name: Page - Two Column
*/

get_header();

?>

	<?php the_showcase(); ?>

	<?php the_large_title(); ?>
	
	<div id="content" class="wrap group content-narrow" role="main">
		<div class="half">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				the_content();
			endwhile;
		endif;
		?>
		</div>
		<div class="half">
			<?php show_cmb_value( 'left-column' ); ?>
		</div>
	</div><!-- #content -->

<?php

get_footer();

?>