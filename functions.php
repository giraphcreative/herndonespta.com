<?php


// set a custom field prefix
define( "CMB_PREFIX", "_p_" );


// include some theme-related things
include( "library/menus.php" );
include( "library/scripts.php" );


// an extra image manipulation function
include( "library/images.php" );


// include our metaboxes library
include( "library/metabox.php" );


// include quote metaboxes/functions
include( "library/title.php" );
include( "library/showcase.php" );


// declare woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>