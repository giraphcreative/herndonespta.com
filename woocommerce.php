<?php

get_header();

?>

	<div id="content" class="wrap group content-wide" role="main">
		<?php woocommerce_content(); ?>
	</div><!-- #content -->

	<hr>

	<div class="text-center"><img src="<?php bloginfo('template_url') ?>/img/stripe.png" /></div>

<?php

get_footer();

?>