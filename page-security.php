<?php

/*
Template Name: Page w/ Security Message
*/

get_header();

?>

	<?php the_showcase(); ?>

	<?php the_large_title(); ?>
	
	<div id="content" class="wrap group content-wide" role="main">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				the_content();
			endwhile;
		endif;
		?>
	</div><!-- #content -->

	<hr>

	<div class="text-center" style="padding: 20px;">
		<img src="<?php bloginfo('template_url') ?>/img/stripe.png" />
		<p>This website is secured by Comodo and all communication is encrypted.</p>
	</div>

<?php

get_footer();

?>