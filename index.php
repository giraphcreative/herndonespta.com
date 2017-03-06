<?php
/*
Home/catch-all template
*/

get_header(); ?>

	<?php 
	if ( is_search() ) {
		?>
	<div class="wrap">
		<div class="large-title">
			<div class="large-title-text">
				<h1>Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1>
			</div>
		</div>
	</div>
		<?php
	} else {
		the_large_title();
	}

	?>
	<div id="primary" class="wrap group content-wide" role="main">
			
			<?php
			while ( have_posts() ) : the_post();
				?>
				<hr>
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<?php
			endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>