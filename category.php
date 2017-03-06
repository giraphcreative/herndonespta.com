<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

?>

	<div class="wrap">
		<div class="large-title">
			<div class="large-title-text">
				<h1><?php single_cat_title(); ?></span></h1>
			</div>
		</div>
	</div>
	
	<section id="primary" class="wrap group content-wide blog" role="main">

	<?php if ( have_posts() ) : ?>
	<?php
	
		// Start the Loop.
		while ( have_posts() ) : the_post(); 
			?>
		<div class="entry">
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<p class="quiet">Posted by <?php the_author_link() ?> in <?php print get_the_category_list( ', ', '', get_the_ID() ) ?> <span>on <?php the_date() ?></span></p>
		</div>
			<?php
		endwhile;

	else :
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );

	endif;
	?>

	</section><!-- #primary -->


<?php

get_footer();

?>