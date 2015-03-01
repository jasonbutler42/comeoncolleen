<?php

if ( ! defined('WOOCOMMERCE_VERSION') ) {
	return;
}

// http://jameskoster.co.uk/snippets/disable-woocommerce-styles/
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Redefine woocommerce_output_related_products()
if ( ! function_exists( 'woocommerce_output_related_products' ) ) {
	function woocommerce_output_related_products() {
		$args = array(
			'posts_per_page' => 4,
			'columns'        => 4,
			'orderby'        => 'rand'
		);

		woocommerce_related_products( $args ); // Display n products in n columns
	}
}

// Display 12 products per page.
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function wpcanvas2_wrapper_start() {
	global $posts_per_page;
	$posts_per_page = 4;
	echo '<div id="primary" class="content-area">';
		echo '<main id="main" class="site-main" role="main">';
}
add_action('woocommerce_before_main_content', 'wpcanvas2_wrapper_start', 10);

function wpcanvas2_wrapper_end() {
	  echo '</main>';
  echo '</div>';
}
add_action('woocommerce_after_main_content', 'wpcanvas2_wrapper_end', 10);

// remove breadcrumbs for woocommerce
// remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

function wpcanvas2_woocommerce_setup() {
	//Declare WooCommerce support
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'wpcanvas2_woocommerce_setup' );
