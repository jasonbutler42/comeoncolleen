<?php
/**
 * WPCanvas2 Theme Customizer
 *
 * @package WPCanvas2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wpcanvas2_customize_register( $wp_customize ) {
	global $wpc2_default; // default values are found in `/inc/default_options.php`

	/**
	 * Load Classes
	 */
	require get_template_directory() . '/inc/classes/sanitize.php';
	require get_template_directory() . '/inc/classes/choices.php';
	require get_template_directory() . '/inc/classes/customize-control.php';

	$sanitize = WPCanvas2_Sanitize::get_instance();
	$choices = WPCanvas2_Choices::get_instance();

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	/***************************/
	/* Grid
	/***************************/
	$section_id = 'wpcanvas2_grid';
	$wp_customize->add_section( $section_id , array(
		'title' => __( 'Grid', 'wpcanvas2' ),
		'priority' => 1,
	) );

	// Site Width
	$setting_id = 'site_width';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_500_1600' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Site Width', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 1,
				'type' => 'text',
			)
		)
	);

	// Sidebar Width
	$setting_id = 'sidebar_width';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_100_500' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Sidebar Width', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 2,
				'type' => 'text',
			)
		)
	);

	// Edge Padding
	$setting_id = 'edge_padding';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_0_200' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Edge Padding', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 3,
				'type' => 'text',
			)
		)
	);

	// Sidebar Edge Padding
	$setting_id = 'sidebar_edge_padding';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_0_500' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Sidebar Edge Padding', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 4,
				'type' => 'text',
			)
		)
	);

	/***************************/
	/* Body Background
	/***************************/
	$section_id = 'wpcanvas2_body_background';
	$wp_customize->add_section( $section_id , array(
		'title' => __( 'Body Background', 'wpcanvas2' ),
		'priority' => 3,
	) );

	// Body Background
	$setting_id = 'body_background_image';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(
		new WPC2_Customize_Image_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Background Image', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 1,
			)
		)
	);

	// Body Background Position
	$setting_id = 'body_background_position';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'background_position' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Background Position', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 2,
				'type' => 'select',
				'choices' => $choices->background_position(),
			)
		)
	);

	// Body Background Repeat
	$setting_id = 'body_background_repeat';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'background_repeat' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Background Repeat', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 3,
				'type' => 'select',
				'choices' => $choices->background_repeat(),
			)
		)
	);

	// Body Background Attachment
	$setting_id = 'body_background_attachment';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'background_attachment' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Background Attachment', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 4,
				'type' => 'select',
				'choices' => $choices->background_attachment(),
			)
		)
	);

	// Body Background Color
	$setting_id = 'body_background_color';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'hex_color' ),
	) );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
			$wp_customize, 
			$setting_id, 
			array(
				'label' => __( 'Background Color', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 5,
			)
		) 
	);

	/***************************/
	/* Logo Image
	/***************************/
	$section_id = 'wpcanvas2_logo';
	$wp_customize->add_section( $section_id , array(
		'title' => __( 'Logo Image', 'wpcanvas2' ),
		'priority' => 8,
	) );

	// Logo Image
	$setting_id = 'logo_image';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(
		new WPC2_Customize_Image_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Logo Image', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 1,
			)
		)
	);

	// Logo Bottom Padding
	$setting_id = 'logo_bottom_padding';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_0_500' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Logo Bottom Padding', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 2,
				'type' => 'text',
			)
		)
	);

	/***************************/
	/* Site Title & Tagline
	/***************************/
	$section_id = 'title_tagline';

	// Show Title
	$setting_id = 'show_title';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'bool' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Show Title', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 10,
				'type' => 'checkbox',
			)
		)
	);

	// Show Description
	$setting_id = 'show_description';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'bool' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Show Tagline', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 11,
				'type' => 'checkbox',
			)
		)
	);

	// Title Bottom Padding
	$setting_id = 'title_bottom_padding';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_0_500' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Title Bottom Padding', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 12,
				'type' => 'text',
			)
		)
	);

	/***************************/
	/* Header Layout
	/***************************/
	$section_id = 'wpcanvas2_header_layout';
	$wp_customize->add_section( $section_id , array(
		'title' => __( 'Header Layout', 'wpcanvas2' ),
		'priority' => 40,
	) );

	// Header Background
	$setting_id = 'header_background_image';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(
		new WPC2_Customize_Image_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Background Image', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 1,
			)
		)
	);

	// Header Background Position
	$setting_id = 'header_background_position';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'background_position' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Background Position', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'type' => 'select',
				'choices' => $choices->background_position(),
				'priority' => 2,
			)
		)
	);

	// Header Background Repeat
	$setting_id = 'header_background_repeat';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'background_repeat' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Background Repeat', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 3,
				'type' => 'select',
				'choices' => $choices->background_repeat(),
			)
		)
	);

	// Header Background Color
	$setting_id = 'header_background_color';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'hex_color' ),
	) );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
			$wp_customize, 
			$setting_id, 
			array(
				'label' => __( 'Background Color', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 4,
			)
		) 
	);

	// Header Top Padding
	$setting_id = 'header_top_padding';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_0_700' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Header Top Padding', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 5,
				'type' => 'text',
			)
		)
	);

	// Header Bottom Padding
	$setting_id = 'header_bottom_padding';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'number_0_700' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Header Bottom Padding', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 6,
				'type' => 'text',
			)
		)
	);

	/***************************/
	/* Footer
	/***************************/
	$section_id = 'wpcanvas2_footer';
	$wp_customize->add_section( $section_id , array(
		'title' => __( 'Footer', 'wpcanvas2' ),
		'priority' => 80,
	) );

	// Affiliate Username
	$setting_id = 'affiliate_username';
	$wp_customize->add_setting( $setting_id, array(
		'default' => $wpc2_default[ $setting_id ],
		'sanitize_callback' => array( $sanitize , 'text_field' ),
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			$setting_id,
			array(
				'label' => __( 'Affiliate Username', 'wpcanvas2' ),
				'section' => $section_id,
				'settings' => $setting_id,
				'priority' => 1,
				'type' => 'text',
				'description' => 'Leave the Angie Makes link in your footer and earn cash. Become an <a href="http://angiemakes.com/affiliate-signup/" target="_blank">Angie Makes Affiliate</a> and insert your username in the text field below.',
			)
		)
	);
}
add_action( 'customize_register', 'wpcanvas2_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wpcanvas2_customize_preview_js() {
	wp_enqueue_script( 'wpcanvas2_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wpcanvas2_customize_preview_js' );
