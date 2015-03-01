<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package WPCanvas2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wpcanvas2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
		'footer_widgets' => true,
	) );
}
add_action( 'after_setup_theme', 'wpcanvas2_jetpack_setup' );

function wpcanvas2_jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    // if ( class_exists( 'Jetpack_Likes' ) ) {
        // remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    // }
}
add_action( 'loop_start', 'wpcanvas2_jptweak_remove_share' );
