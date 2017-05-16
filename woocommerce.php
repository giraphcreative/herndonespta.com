<?php

get_header();

?>

	<?php the_showcase(); ?>

	<?php the_large_title(); ?>
	
	<div id="content" class="wrap group content-wide" role="main">
		<?php woocommerce_content(); ?>
	</div><!-- #content -->

<?php

get_footer();

?>