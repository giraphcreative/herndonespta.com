<?php

/*
Template Name: Events Calendar
*/

get_header();

?>

	<?php the_showcase(); ?>

	<?php the_large_title(); ?>
	
	<div id="content" class="wrap group content-wide" role="main">
		<iframe src="https://calendar.google.com/calendar/embed?src=herndonptasecretary%40gmail.com&ctz=America%2FNew_York" border=0 style="width: 100%; height: 500px; border: 0;"></iframe>
		<hr />
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