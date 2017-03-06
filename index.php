<?php
/*
Home/catch-all template
*/

get_header(); ?>

	<div class="wrap">
		<div class="large-title">
			<div class="large-title-text">
			<?php 
			if ( is_search() ) {
				?>
				<h1>Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1>
				<?php
			} else {
				?>
				<h1>eNews</span></h1>
				<?php
			}
			?>
			</div>
		</div>
	</div>
	
	<div id="primary" class="wrap group content-wide blog" role="main">
		
		<?php
		while ( have_posts() ) : the_post();
			?>
		<div class="entry">
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<p class="quiet">Posted by <?php the_author_link() ?> in <?php print get_the_category_list( ', ', '', get_the_ID() ) ?> <span>on <?php the_date() ?></span></p>
		</div>
			<?php
		endwhile;
		?>

	</div><!-- #primary -->


<?php get_footer(); ?>