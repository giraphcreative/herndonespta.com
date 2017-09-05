<?php

get_header();

?>

	<div id="content" class="wrap group content-wide" role="main">
		<?php woocommerce_content(); ?>
	</div><!-- #content -->

	<hr>

	<div class="text-center" style="padding: 20px;">
		<img src="<?php bloginfo('template_url') ?>/img/stripe.png" />
		<p>This website is secured by Comodo and all communication is encrypted.</p>
	</div>

<?php

get_footer();

?>