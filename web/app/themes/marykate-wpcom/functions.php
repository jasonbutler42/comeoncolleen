<?php
/**
 * WPCanvas2 functions and definitions
 *
 * @package WPCanvas2
 */

/**
 * Load common utility functions.
 */
require get_template_directory() . '/inc/utilities.php';

/**
 * Define constant variables
 */
define( 'WPCANVAS2_VERSION', wpcanvas2_get_version() );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'wpcanvas2_font_url' ) ) :
/**
 * Register Lato Google font for Twenty Fourteen.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return string
 */
function wpcanvas2_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'wpcanvas2' ) ) {
		$font_url = add_query_arg( 'family', urlencode( 'Lato:300,400,700,900,300italic,400italic,700italic' ), "//fonts.googleapis.com/css" );
	}

	return $font_url;
}
endif; // wpcanvas2_font_url

if ( ! function_exists( 'wpcanvas2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wpcanvas2_setup() {
	global $_wp_theme_features;

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WPCanvas2, use a find and replace
	 * to change 'wpcanvas2' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpcanvas2', get_template_directory() . '/languages' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', wpcanvas2_font_url() ) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 200, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wpcanvas2' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery' ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );

	// Enable support for custom code to be inserted on various sections of theme
	add_theme_support( 'wpc-insert-code', array( 'top-of-page', 'above-header', 'below-header', 'above-content', 'below-content' ) );

	// Enable support for WC Shortcodes plugin
	add_theme_support( 'wpc-shortcodes', array(
		'fullwidth_container' => '#page',
		'facebook_social_icon' => get_template_directory_uri() . '/img/social-icons/facebook.png',
		'twitter_social_icon' => get_template_directory_uri() . '/img/social-icons/twitter.png',
		'pinterest_social_icon' => get_template_directory_uri() . '/img/social-icons/pinterest.png',
		'google_social_icon' => get_template_directory_uri() . '/img/social-icons/google.png',
		'bloglovin_social_icon' => get_template_directory_uri() . '/img/social-icons/bloglovin.png',
		'email_social_icon' => get_template_directory_uri() . '/img/social-icons/email.png',
		'flickr_social_icon' => get_template_directory_uri() . '/img/social-icons/flickr.png',
		'instagram_social_icon' => get_template_directory_uri() . '/img/social-icons/instagram.png',
		'rss_social_icon' => get_template_directory_uri() . '/img/social-icons/rss.png',
		'custom1_social_icon' => get_template_directory_uri() . '/img/social-icons/heart.png',
		'custom2_social_icon' => get_template_directory_uri() . '/img/social-icons/shopping.png',
		'custom3_social_icon' => get_template_directory_uri() . '/img/social-icons/youtube.png',
		'custom4_social_icon' => get_template_directory_uri() . '/img/social-icons/etsy.png',
		'custom5_social_icon' => get_template_directory_uri() . '/img/social-icons/tumblr.png',
		'pinterest_share_button' => get_template_directory_uri() . '/img/share-buttons/pinterest.png',
		'facebook_share_button' => get_template_directory_uri() . '/img/share-buttons/facebook.png',
		'twitter_share_button' => get_template_directory_uri() . '/img/share-buttons/twitter.png',
		'google_share_button' => get_template_directory_uri() . '/img/share-buttons/google.png',
		'email_share_button' => get_template_directory_uri() . '/img/share-buttons/email.png',
		'print_share_button' => get_template_directory_uri() . '/img/share-buttons/print.png',
	) );
}
endif; // wpcanvas2_setup
add_action( 'after_setup_theme', 'wpcanvas2_setup' );

if ( ! function_exists( 'wpcanvas2_widgets_init' ) ) :
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wpcanvas2_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wpcanvas2' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'wpcanvas2' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
endif; // wpcanvas2_widgets_init
add_action( 'widgets_init', 'wpcanvas2_widgets_init' );

if ( ! function_exists( 'wpcanvas2_scripts' ) ) :
/**
 * Enqueue scripts and styles.
 *
 * @since 3.9
 *
 * @return void
 */
function wpcanvas2_scripts() {
	global $wpc2;

	if ( $google_font_code = wpcanvas2_get_google_font_code() ) {
		wp_enqueue_style( 'wpcanvas2-google-web-fonts', 'http://fonts.googleapis.com/css?family=' . $google_font_code );
	}

	wp_enqueue_style( 'wpcanvas2-style', get_stylesheet_uri(), array(), WPCANVAS2_VERSION );
	wp_enqueue_style( 'wpcanvas2-anmation', get_template_directory_uri() . '/css/animation.css', array( ), WPCANVAS2_VERSION );
	wp_enqueue_style( 'wpcanvas2-print', get_template_directory_uri() . '/css/print.css', array( ), WPCANVAS2_VERSION );

	wp_enqueue_script( 'wpcanvas2-resize', get_template_directory_uri() . '/js/jquery.ba-resize.min.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'jquery-masonry' );
	
	wp_enqueue_script( 'wpcanvas2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), WPCANVAS2_VERSION, true );

	if ( $wpc2['menu_bar_enable_sticky_menu'] ) {
		wp_enqueue_script( 'wpcanvas2-sticky-menu', get_template_directory_uri() . '/js/sticky-menu.js', array(), WPCANVAS2_VERSION, true );
	}

	if ( ! defined( 'WC_GALLERY_VERSION' ) ) {
		wp_register_script( 'wordpresscanvas-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array (), '3.1.5', true );
		wp_enqueue_script( 'wpcanvas2-galleries', get_template_directory_uri() . '/js/gallery.js', array( 'jquery', 'wordpresscanvas-imagesloaded' ), WPCANVAS2_VERSION, true );
	}

	if ( ! defined( 'WC_SHORTCODES_VERSION' ) ) {
		wp_register_style( 'wordpresscanvas-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array( ), '4.1.0' );
		wp_enqueue_style( 'wordpresscanvas-font-awesome' );
	}

	wp_enqueue_script( 'wpcanvas2-masonry-footer', get_template_directory_uri() . '/js/masonry-footer.js', array(), WPCANVAS2_VERSION, true );
	wp_localize_script( 'wpcanvas2-masonry-footer', 'wpc2_footer', array( 'gutter' => $wpc2['footer_gutter'] ) );

	wp_enqueue_script( 'wpcanvas2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), WPCANVAS2_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
endif; // wpcanvas2_scripts
add_action( 'wp_enqueue_scripts', 'wpcanvas2_scripts' );

if ( ! function_exists( 'wpcanvas2_customizer_css' ) ) :
/**
 * Output CSS from theme options
 *
 * @since 3.9
 *
 * @return void
 */
function wpcanvas2_customizer_css() {
	global $wpc2;

	ob_start();
	get_template_part( 'css/css', 'custom-fonts' );
	get_template_part( 'css/css', 'body' );
	get_template_part( 'css/css', 'grid' );
	get_template_part( 'css/css', 'buttons' );
	get_template_part( 'css/css', 'header' );
	get_template_part( 'css/css', 'navigation' );
	get_template_part( 'css/css', 'content' );
	get_template_part( 'css/css', 'plugins' );
	get_template_part( 'css/css', 'widgets' );
	get_template_part( 'css/css', 'sidebar' );
	get_template_part( 'css/css', 'footer' );

	if ( $wpc2['responsive_enabled'] ) {
		get_template_part( 'css/css', 'responsive' );
	}

	get_template_part( 'css/css', 'custom-css' );
	$html = ob_get_clean();

	$html = wpcanvas2_minify_css( $html );

	echo '<style type="text/css">' . $html . '</style>';
}
endif; // wpcanvas2_customizer_css
add_action( 'wp_head', 'wpcanvas2_customizer_css');

if ( ! function_exists( 'wpcanvas2_show_sidebar' ) ) :
/**
 * Determine if page should show sidebar.
 *
 * Sidebar bool is calculated in the function
 * wpcanvas2_define_sidebar_display()
 *
 * @since 3.9
 *
 * @return bool
 */
function wpcanvas2_show_sidebar() {
	if ( ! defined( 'WPC2_SHOW_SIDEBAR' ) ) {
		wpcanvas2_define_sidebar_display();
	}

	return WPC2_SHOW_SIDEBAR;
}
endif; // wpcanvas2_show_sidebar

if ( ! function_exists( 'wpcanvas2_define_sidebar_display' ) ) :
/**
 * Define once a bool value for displaying
 * sidebar.
 *
 * @since 3.9
 *
 * @return void
 */
function wpcanvas2_define_sidebar_display() {
	global $wpc2;

	if ( is_page_template('page-templates/full-width.php') || 
		 is_page_template('page-templates/full-width-no-heading.php') ) {
		define( 'WPC2_SHOW_SIDEBAR', false );
		return;
	}
	else if ( is_page_template('page-templates/with-sidebar.php') || 
			  is_page_template('page-templates/with-sidebar-no-heading.php') || 
			  is_page_template('page-templates/full-width-and-sidebar.php') ||
			  is_page_template('page-templates/showcase-full-width-and-sidebar.php') ) {
		define( 'WPC2_SHOW_SIDEBAR', true );
		return;
	}

	$id = wpcanvas2_fetch_sidebar_id();

	$show = false;

	if ( empty( $id ) )
		$show = false;

	if ( isset( $wpc2[ $id ] ) )
		$show = $wpc2[ $id ];

	define( 'WPC2_SHOW_SIDEBAR', (bool) $show );
}
endif;

if ( ! function_exists( 'wpcanvas2_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 */
function wpcanvas2_the_attached_image( &$image ) {
	$post                = get_post();
	/**
	 * Filter the default Twenty Fourteen attachment size.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'wpcanvas2_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	$attachment_image = wp_get_attachment_image( $post->ID, $attachment_size );
	$width = wpcanvas2_get_width_in_html( $attachment_image );
	$image['width'] = $width;

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		$attachment_image
	);
}
endif;

if ( ! function_exists( 'wpcanvas2_show_heading' ) ) :
/**
 * Show Heading
 *
 */
function wpcanvas2_show_heading() {
	$template = basename( get_page_template() );

	switch ( $template ) {
		case 'full-width-no-heading.php' :
		case 'with-sidebar-no-heading.php' :
		case 'showcase-full-width.php' :
		case 'showcase-full-width-and-sidebar.php' :
			return false;
	}

	return true;
}
endif;

if ( ! function_exists( 'wpcanvas2_show_excerpt' ) ) :
/**
 * Show Excerpt
 *
 */
function wpcanvas2_show_excerpt() {
	global $wpc2;

	$show = false;
	$id = null;

	if ( is_home() ) {
		$id = 'excerpt_show_on_blog';
	}
	else if ( is_archive() ) {
		$id = 'excerpt_show_on_archive';
	}
	else if ( is_search() ) {
		$id = 'excerpt_show_on_search';
	}

	if ( ! empty( $id ) && isset( $wpc2[ $id ] ) )
		$show = $wpc2[ $id ];


	return $show;
}
endif;

if ( ! function_exists( 'wpcanvas2_copyright' ) ) :
function wpcanvas2_copyright() {
	global $wpc2;

	if ( ! isset( $wpc2['footer_copyright'] ) ) {
		return;
	}

	if ( empty( $wpc2['footer_copyright'] ) ) {
		return;
	}

	echo wpcanvas2_add_affiliate_link( $wpc2['footer_copyright'] );
}
endif;

if ( ! function_exists( 'wpcanvas2_brand' ) ) :
function wpcanvas2_brand() {
	$html = '<a class="site-info-brand-link" href="http://angiemakes.com"><img src="'.get_template_directory_uri().'/img/angiemakes.png" alt="Angie Makes Feminine WordPress Themes" /></a>';
	$html = wpcanvas2_add_affiliate_link( $html );

	echo $html;
}
endif;

/**
 * Set default options
 */
require get_template_directory() . '/inc/default-options.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Font List
 */
require get_template_directory() . '/inc/classes/fonts-list.php';
$wpc2_fonts_list = WPCanvas2_Fonts_List::get_instance();

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load WooCommerce compatibility file.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Include responsive video plugin code
 */
require get_template_directory() . '/inc/vendors/wc-responsive-video/responsive-video.php';
