<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package WPCanvas2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wpcanvas2_body_classes( $classes ) {
	global $wpc2;

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	if ( wpcanvas2_show_sidebar() ) {
		$classes[] = 'display-sidebar';
	}
	if ( ( is_single() || is_page() ) && comments_open() ) {
		$classes[] = 'comments-open';
	}
	$classes[] = 'sidebar-position-' . $wpc2['sidebar_position'];

	if ( ! defined( 'WC_SHORTCODES_VERSION' ) ) {
		$classes[] = 'wc-shortcodes-font-awesome-enabled';
	}

	return $classes;
}
add_filter( 'body_class', 'wpcanvas2_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function wpcanvas2_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'wpcanvas2' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'wpcanvas2_wp_title', 10, 2 );

/**
 * Replace the excerpt [...] with read more link
 *
 * @since 3.6.1
 * @access public
 *
 * @param mixed $more
 * @return void
 */
function wpcanvas2_excerpt_more($more) {
	global $post;

	if ( is_archive() || is_home() || is_search() )
		return '&hellip; <a class="excerpt-more" href="'. get_permalink($post->ID) . '">' . __( 'Read&nbsp;More', 'wpcanvas2' ) . '</a>';
	else
		return "&hellip;";
}
add_filter('excerpt_more', 'wpcanvas2_excerpt_more');

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function wpcanvas2_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'wpcanvas2_setup_author' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
function wpcanvas2_content_width() {
	global $content_width;
	global $wpc2;

	$content_width = $wpc2['full_content_width'];
}
add_action( 'wp_loaded', 'wpcanvas2_content_width' );

function wpcanvas2_check_sidebar_for_content_width() {
	global $content_width;
	global $wpc2;

	if ( wpcanvas2_show_sidebar() ) {
		$content_width = $wpc2['content_width'];
	}
}
add_action( 'template_redirect', 'wpcanvas2_check_sidebar_for_content_width' );

/**
 * Adds font extensions support to Wordpress uploader
 *
 * @since 3.5.2
 * @access public
 *
 * @param array $ext 
 * @return array
 */
function wpcanvas2_add_font_mime_types( $mime_types ) {
	$mime_types['eot|woff|woff2'] = 'application/octet-stream';
	$mime_types['ttf'] = 'application/x-font-ttf';
	$mime_types['svg'] = 'image/svg+xml';
	$mime_types['otf'] = 'application/vnd.ms-opentype';

	return $mime_types;
}
add_filter( 'mime_types', 'wpcanvas2_add_font_mime_types', 10, 1 );

function wpcanvas2_add_gallery_attributes( $output ) {

	if ( preg_match( "/gallery-columns-([0-9]+)/", $output, $matches ) ) {
		if ( isset( $matches[1] ) ) {
			$output = str_replace( "class='", "class='wpc2-thumbnail-grid ", $output );
			$output = str_replace( "class='", "data-gutter-width='5' data-columns='".intval( $matches[1] )."' class='", $output );
		}
	}

	return $output;
}
add_filter( 'gallery_style', 'wpcanvas2_add_gallery_attributes', 10, 1 );
