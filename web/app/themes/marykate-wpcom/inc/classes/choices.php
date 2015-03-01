<?php
/**
 * Choices Class
 *
 * @package WP Canvas 2
 */
class WPCanvas2_Choices {
	protected static $instance = null;

	private function __construct() {
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.0
	 *
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	public function background_position() {
		return array(
			'left top' => __( 'Left Top', 'wpcanvas2' ),
			'left center' => __( 'Left Center', 'wpcanvas2' ),
			'left bottom' => __( 'Left Bottom', 'wpcanvas2' ),
			'right top' => __( 'Right Top', 'wpcanvas2' ),
			'right center' => __( 'Right Center', 'wpcanvas2' ),
			'right bottom' => __( 'Right Bottom', 'wpcanvas2' ),
			'center top' => __( 'Center Top', 'wpcanvas2' ),
			'center center' => __( 'Center Center', 'wpcanvas2' ),
			'center bottom' => __( 'Center Bottom', 'wpcanvas2' ),
		);
	}

	public function background_repeat() {
		return array(
			'repeat' => __( 'Repeat', 'wpcanvas2' ),
			'no-repeat' => __( 'No Repeat', 'wpcanvas2' ),
			'repeat-x' => __( 'Repeat Horizontal', 'wpcanvas2' ),
			'repeat-y' => __( 'Repeat Vertical', 'wpcanvas2' ),
		);
	}

	public function background_attachment() {
		return array(
			'scroll' => __( 'Scroll', 'wpcanvas2' ),
			'fixed' => __( 'Fixed', 'wpcanvas2' ),
		);
	}

	public function font_weight() {
		return array(
			'100' => __( 'Thin 100', 'wpcanvas2' ),
			'200' => __( 'Extra Light 200', 'wpcanvas2' ),
			'300' => __( 'Light 300', 'wpcanvas2' ),
			'normal' => __( 'Normal 400', 'wpcanvas2' ),
			'500' => __( 'Medium 500', 'wpcanvas2' ),
			'600' => __( 'Semi Bold 600', 'wpcanvas2' ),
			'bold' => __( 'Bold 700', 'wpcanvas2' ),
			'800' => __( 'Extra Bold 800', 'wpcanvas2' ),
			'900' => __( 'Ultra Bold 900', 'wpcanvas2' ),
		);
	}

	public function font_style() {
		return array(
			'normal' => __( 'Normal', 'wpcanvas2' ),
			'italic' => __( 'Italic', 'wpcanvas2' ),
		);
	}

	public function text_transform() {
		return array(
			'none' => __( 'None', 'wpcanvas2' ),
			'capitalize' => __( 'Capitalize', 'wpcanvas2' ),
			'uppercase' => __( 'Uppercase', 'wpcanvas2' ),
			'lowercase' => __( 'Lowercase', 'wpcanvas2' ),
		);
	}

	public function left_right() {
		return array(
			'left' => __( 'Left', 'wpcanvas2' ),
			'right' => __( 'Right', 'wpcanvas2' ),
		);
	}

	public function footer_columns() {
		return array(
			'1' => __( '1', 'wpcanvas2' ),
			'2' => __( '2', 'wpcanvas2' ),
			'3' => __( '3', 'wpcanvas2' ),
			'4' => __( '4', 'wpcanvas2' ),
			'5' => __( '5', 'wpcanvas2' ),
			'6' => __( '6', 'wpcanvas2' ),
		);
	}
}
