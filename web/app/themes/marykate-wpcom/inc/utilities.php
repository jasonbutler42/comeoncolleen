<?php
/**
 * Minify CSS
 *
 * @since 3.8.1
 * @access public
 *
 * @param string $buffer
 * @return string
 */
function wpcanvas2_minify_css( $buffer ) {
	// Remove comments
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

	// Remove space after colons
	$buffer = str_replace(': ', ':', $buffer);

	// Remove whitespace
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

	return $buffer;
}

function wpcanvas2_page_formats() {
	$pages['post'] = 'Post';
	$pages['page'] = 'Page';
	$pages['attachment'] = 'Media';
	$pages['blog'] = 'Blog';
	$pages['search'] = 'Search';
	$pages['404'] = '404';
	$pages['archive'] = 'Archive';

	$args = array(
		'show_ui' => true,
		'public' => true,
		'publicly_queryable' => true,
		'_builtin' => false
	);
	$output = 'objects'; // names or objects, note names is the default
	$operator = 'and'; // 'and' or 'or'

	$post_types = get_post_types( $args, $output, $operator ); 

	foreach ($post_types  as $type ) {
		$pages[ $type->name ] = $type->label;
		if ( $type->has_archive ) {
			$pages[ $type->name . '_archive' ] = $type->label . ' Archive';
		}
	}

	return $pages;
}

function wpcanvas2_fetch_sidebar_id() {
	$id = '';

	if ( is_attachment() ) {
		$id = 'sidebar_display_attachment';
	}
	else if ( is_single() || is_page() ) {
		$post_type = get_post_type();
		$id = 'sidebar_display_' . $post_type;
	}
	else if ( is_home() ) {
		$id = 'sidebar_display_blog';
	}
	else if ( is_archive() ) {
		$id = wpcanvas2_fetch_sidebar_id_for_archive();
	}
	else if ( is_search() ) {
		$id = 'sidebar_display_search';
	}
	else if ( is_404() ) {
		$id = 'sidebar_display_404';
	}

	return $id;
}

function wpcanvas2_fetch_sidebar_id_for_archive() {
	$post_type = get_post_type();

	if ( 'post' == $post_type ) {
		return 'sidebar_display_archive';
	}

	return 'sidebar_display_' . $post_type . '_archive';
}

function wpcanvas2_css_set_font_family( $id, $smoothing_id = null ) {
	global $wpc2;

	if ( ! isset( $wpc2[ $id ] ) ) {
		trigger_error ( sprintf( '$id %s does not exists in $wpc2 in wpcanvas2_css_set_font_family()', $id ), E_USER_NOTICE );
		return null;
	}

	if ( empty( $wpc2[ $id ] ) ) {
		return null;
	}

	$css = '';
	$css .= 'font-family: "' . $wpc2[ $id ] . '";';

	if ( ! empty( $wpc2[ $smoothing_id ] ) && isset( $wpc2[ $smoothing_id ] ) ) {
		$css .= '-webkit-font-smoothing: antialiased;';
		$css .= '-moz-osx-font-smoothing: grayscale;';
	}
	else {
		$css .= '-webkit-font-smoothing: subpixel-antialiased;';
		$css .= '-moz-osx-font-smoothing: auto;';
	}

	return $css;
}

function wpcanvas2_css_set_background_image( $id ) {
	global $wpc2;

	if ( empty( $id ) ) {
		trigger_error ( sprintf( '$id %s is empty in wpcanvas2_css_set_background_image()', $id ), E_USER_NOTICE );
		return 'background-image: none;';
	}

	if ( ! isset( $wpc2[ $id ] ) ) {
		trigger_error ( sprintf( '$id %s does not exists in $wpc2 in wpcanvas2_css_set_background_image()', $id ), E_USER_NOTICE );
		return 'background-image: none;';
	}

	if ( empty( $wpc2[ $id ] ) )
		return 'background-image: none;';

	return "background-image: url('" . $wpc2[ $id ] . "');";
}

function wpcanvas2_css_set_background_images( $ids ) {
	global $wpc2;

	if ( empty( $ids ) || ! is_array( $ids ) ) {
		trigger_error ( sprintf( '$ids is empty or not array in wpcanvas2_css_set_background_images()' ), E_USER_NOTICE );
		return 'background-image: none;';
	}

	$temp = array();
	foreach ( $ids as $id ) {
		if ( ! isset( $wpc2[ $id ] ) ) {
			trigger_error ( sprintf( '$id %s does not exists in $wpc2 in wpcanvas2_css_set_background_image()', $id ), E_USER_NOTICE );
			continue;
		}
		else {
			$temp[] = 'url(' . $wpc2[ $id ] . ')';
		}
	}

	if ( empty( $temp ) )
		return 'background-image: none;';

	return "background-image: ".implode( ', ', $temp ).";";
}

function wpcanvas2_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   $length = strlen( $hex );

   if( 3 == $length ) {
      $r = hexdec( substr( $hex,0,1 ) . substr( $hex,0,1 ) );
      $g = hexdec( substr( $hex,1,1 ) . substr( $hex,1,1 ) );
      $b = hexdec( substr( $hex,2,1 ) . substr( $hex,2,1 ) );
   }
   else if ( 6 == $length ) {
      $r = hexdec( substr( $hex,0,2 ) );
      $g = hexdec( substr( $hex,2,2 ) );
      $b = hexdec( substr( $hex,4,2 ) );
   }
   else {
	   return false;
   }

   $rgb = array($r, $g, $b);

   return implode( ",", $rgb ); // returns the rgb values separated by commas
}

function wpcanvas2_adjust_brightness($hex, $steps) {
    // Steps should be between -255 and 255. Negative = darker, positive = lighter
    $steps = max(-255, min(255, $steps));

    // Format the hex color string
    $hex = str_replace('#', '', $hex);
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
    }

    // Get decimal values
    $r = hexdec(substr($hex,0,2));
    $g = hexdec(substr($hex,2,2));
    $b = hexdec(substr($hex,4,2));

    // Adjust number of steps and keep it inside 0 to 255
    $r = max(0,min(255,$r + $steps));
    $g = max(0,min(255,$g + $steps));  
    $b = max(0,min(255,$b + $steps));

    $r_hex = str_pad(dechex($r), 2, '0', STR_PAD_LEFT);
    $g_hex = str_pad(dechex($g), 2, '0', STR_PAD_LEFT);
    $b_hex = str_pad(dechex($b), 2, '0', STR_PAD_LEFT);

    return '#'.$r_hex.$g_hex.$b_hex;
}

function wpcanvas2_css_set_rgba_color( $property, $id, $opacity = '0.7' ) {
	global $wpc2;

	if ( ! isset( $wpc2[ $id ] ) ) {
		trigger_error ( sprintf( '$id %s is empty in wpcanvas2_css_set_rgba_color()', $id ), E_USER_NOTICE );
		return '';
	}

	if ( empty( $wpc2[ $id ] ) ) {
		return '';
	}

	if ( ! $color = wpcanvas2_hex2rgb( $wpc2[ $id ] ) ) {
		return '';
	}

	if ( empty( $opacity ) ) {
		$opacity = '0.7';
	}

	$css = $property . ": rgb(" . $color . ");";
	$css .= $property . ": rgba(" . $color . ",".$opacity.");";

	return $css;
}

function wpcanvas2_css_set_color( $property, $id, $step = 0 ) {
	global $wpc2;

	if ( ! isset( $wpc2[ $id ] ) ) {
		trigger_error ( sprintf( '$id %s does not exists in $wpc2 in wpcanvas2_css_set_rgba_color()', $id ), E_USER_NOTICE );
		return '';
	}

	if ( empty( $wpc2[ $id ] ) ) {
		return '';
	}

	$color = $wpc2[ $id ];

	if ( ! empty( $step ) )
		$color = wpcanvas2_adjust_brightness( $color, $step );

	return $property . ": " . $color . ";";
}

function wpcanvas2_mul_px( $id, $p ) {
	global $wpc2;

	if ( ! isset( $wpc2[ $id ] ) ) {
		trigger_error ( sprintf( '$id %s does not exists in $wpc2 in wpcanvas2_mul_px()', $id ), E_USER_NOTICE );
		return 0;
	}

	if ( empty( $wpc2[ $id ] ) )
		return 0;

	$size = round( $wpc2[ $id ] * $p );

	return $size;
}

function wpcanvas2_get_google_font_code() {
	global $wpc2, $wpc2_fonts_list;

	if ( empty( $wpc2_fonts_list ) )
		return null;

	$google_code = null;

	$selected = array();

	foreach ( $wpc2 as $key => $value ) {
		if ( strpos( $key, '_font_family' ) ) {
			$f['family'] = $wpc2[ $key ];

			$f['weight'] = 'normal';
			$id = str_replace( '_font_family', '_font_weight', $key );
			if ( array_key_exists( $id, $wpc2 ) ) {
				$f['weight'] = $wpc2[ $id ];
			}

			$f['bold_weight'] = $f['weight'];
			$id = str_replace( '_font_family', '_font_bold_weight', $key );
			if ( array_key_exists( $id, $wpc2 ) ) {
				$f['bold_weight'] = $wpc2[ $id ];
			}

			$f['style'] = 'normal';
			$id = str_replace( '_font_family', '_font_style', $key );
			if ( array_key_exists( $id, $wpc2 ) ) {
				$f['style'] = $wpc2[ $id ];
			}

			$selected[] = $f;
		}
	}
	$google_code = $wpc2_fonts_list->get_google_code( $selected );

	return $google_code;
}

/**
 * Get version number of theme. Append child version to parent version.
 * This will help compile less for a new version and for a new style.
 *
 * @since 3.7.1
 * @access public
 *
 * @return version
 */
function wpcanvas2_get_version() {
	$my_theme = wp_get_theme();
	if ( is_child_theme() ) {
		$version = $my_theme->parent()->get( 'Version' );
	}
	else {
		$version = $my_theme->get( 'Version' );
	}

	if ( empty( $version ) ) {
		$version = '1.0';
	}

	return $version;
}

/**
 * Regular expression in HTML to find decimal value inside width attribute
 *
 * @since 3.9
 * @access public
 *
 * @param string $html
 * @return int
 */
function wpcanvas2_get_width_in_html( $html ) {
	$width = 0;

	preg_match( '/width=["|\'](\d+)["|\']/', $html, $match );

	if ( array_key_exists( 1, $match ) ) {
		$width = intval( $match[1] ); //width
	}

	return $width;
}

if ( ! function_exists( 'wpcanvas2_add_affiliate_link' ) ) :
function wpcanvas2_add_affiliate_link( $html ) {
	global $wpc2;

	$id = trim( $wpc2['affiliate_username'] );

	if ( ! isset( $id ) ) {
		return $html;
	}

	if ( empty( $id ) ) {
		return $html;
	}

	$search = '/(href=["|\']https?:\/\/angiemakes\.com)\/?(["|\'])/';
	$replace = '$1?aff='.$id.'$2';

	$html = preg_replace( $search, $replace, $html );

	return $html;
}
endif;

if ( ! function_exists( 'wpcanvas2_span_each_word' ) ) :
function wpcanvas2_span_each_word( $date_format, $class ) {
	$date_format = preg_replace( '/\s+/', ' ', $date_format );
	$pieces = explode( ' ', $date_format );
	$html = '';
	foreach ( $pieces as $key => $piece ) {
		$length = strlen( $piece );
		$i = $key + 1;
		$html .= '<span class="'.$class.' '.$class.'-item-'.$i.' '.$class.'-length-'.$length.'">'.$piece.'</span>';
	}

	return $html;
}
endif;
