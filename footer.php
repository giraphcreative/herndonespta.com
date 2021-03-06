<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
		
	</section>

	<footer class="footer">
		<div class="wrap">
			<div class="column first">
				<p><strong>HERNDON ELEMENTARY PTA</strong><br>
					630 Dranesville Rd.<br>
					Herndon, VA 20170<br>
					703-326-3100</p>
			</div>
			<div class="column">
				<nav role="navigation">
					<?php wp_nav_menu( array( 
						'theme_location' => 'footer-left', 
						'menu_class' => 'nav-menu' ) 
					); ?>
				</nav>
			</div>
			<div class="column">
				<nav role="navigation">
					<?php wp_nav_menu( array( 
						'theme_location' => 'footer-right', 
						'menu_class' => 'nav-menu' ) 
					); ?>
				</nav>
			</div>
			<div class="column social">
				<a href="https://twitter.com/herndonespta" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-twitter.png"></a>
				<a href="https://www.facebook.com/HERNDONESPTA/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-facebook.png"></a>
				<a href="https://www.instagram.com/herndonespta/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-instagram.png"></a>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>