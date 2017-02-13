<?php

/*
Template Name: Page - Home
*/

get_header();

?>

	<?php the_showcase(); ?>

	<div class="wrap group">	

		<div class="home-sections">
			
			<section>
				<a href="/volunteer"><img src="<?php bloginfo('template_url') ?>/img/home-volunteer.png"></a>
				<p><strong>Get Involved</strong><br>
					Become a school volunteer</p>
			</section>

			<section>
				<a href="/membership"><img src="<?php bloginfo('template_url') ?>/img/home-bee.png"></a>
				<p><strong>Buzzy Bee Membership</strong><br>
					Support our children's education</p>
			</section>

			<section>
				<a href="/events"><img src="<?php bloginfo('template_url') ?>/img/home-happening.png"></a>
				<p><strong>What's Happening</strong><br>
					Stay in the loop</p>
			</section>

			<section>
				<a href="/activities"><img src="<?php bloginfo('template_url') ?>/img/home-activities.png"></a>
				<p><strong>Activities &amp; Clubs</strong><br>
					Register here</p>
			</section>

		</div>
	
	</div>


<?php 

get_footer();

?>