<?php


function the_large_title() {

	if ( has_cmb_value( 'large-title' ) ) {
		?>
	<div class="wrap">
		<div class="large-title">
			<?php if ( has_cmb_value( 'large-title-icon' ) ) { ?>
			<div class="large-title-icon">
				<img src="<?php show_cmb_value( 'large-title-icon' ) ?>">
			</div>
			<?php } ?>
			<div class="large-title-text">
				<h1><?php 
					show_cmb_value( 'large-title' );
				?></h1>
			</div>
		</div>
	</div>
		<?php
	}	
}


?>