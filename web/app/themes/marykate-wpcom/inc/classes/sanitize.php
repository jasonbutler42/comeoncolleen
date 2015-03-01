<?php
/**
 * Sanitize Class
 *
 * @package WP Canvas 2
 */
class WPCanvas2_Sanitize {
	protected static $instance = null;

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

	public function bool( $value ) {
		return (bool) $value;
	}

	public function decimal_0_1( $value ) {
		$value = preg_replace("/[^0-9\.]/", "",$value);
		$value = number_format( $value, 1 );

		$min = 0;
		$max = 1;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function decimal_0_5( $value ) {
		$value = preg_replace("/[^0-9\.]/", "",$value);
		$value = number_format( $value, 1 );

		$min = 0;
		$max = 5;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function line_height( $value ) {
		$value = preg_replace("/[^0-9\.]/", "",$value);
		$value = number_format( $value, 1 );

		$min = 1;
		$max = 3;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_1_6( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 1;
		$max = 6;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number__50_50( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = -50;
		$max = 50;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_50( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 50;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_100( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 100;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_200( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 200;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_300( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 300;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_500( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 500;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_700( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 700;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_1000( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 1000;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_100_500( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 100;
		$max = 500;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_500_1600( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 500;
		$max = 1600;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_1600( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 1600;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_2000( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 2000;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function number_0_5000( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		$min = 0;
		$max = 5000;

		if ( $value > $max )
			$value = $max;

		if ( $value < $min )
			$value = $min;

		return $value;
	}

	public function positive_number( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		if ( empty( $value ) )
			$value = 0;

		if ( 0 > $value )
			$value = 0;

		return $value;
	}

	public function number( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		if ( empty( $value ) )
			$value = '0';

		return $value;
	}

	public function pixel( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		if ( empty( $value ) )
			$value = '0';

		return $value."px";
	}

	public function text_transform( $value ) {
		$whitelist = array(
			'none',
			'capitalize',
			'uppercase',
			'lowercase',
		);

		if ( in_array( $value, $whitelist ) )
			return $value;

		return 'none';
	}

	public function font_weight( $value ) {
		$whitelist = array(
			'100',
			'200',
			'300',
			'normal',
			'500',
			'600',
			'bold',
			'800',
			'900',
		);

		if ( '400' == $value )
			$value = 'normal';

		if ( '700' == $value )
			$value = 'bold';

		if ( in_array( $value, $whitelist ) )
			return $value;

		return 'normal';
	}

	public function font_style( $value ) {
		$whitelist = array(
			'normal',
			'italic',
		);

		if ( in_array( $value, $whitelist ) )
			return $value;

		return 'normal';
	}

	public function background_position( $value ) {
		$whitelist = array(
			'left top',
			'left center',
			'left bottom',
			'right top',
			'right center',
			'right bottom',
			'center top',
			'center center',
			'center bottom',
		);

		if ( in_array( $value, $whitelist ) )
			return $value;

		return 'left top';
	}

	public function background_repeat( $value ) {
		$whitelist = array( 'repeat', 'no-repeat', 'repeat-x', 'repeat-y' );

		if ( in_array( $value, $whitelist ) )
			return $value;

		return 'repeat';
	}

	public function background_attachment( $value ) {
		$whitelist = array( 'fixed', 'scroll' );

		if ( in_array( $value, $whitelist ) )
			return $value;

		return 'scroll';
	}

	public function hex_color( $color ) {
		if ( '' === $color )
			return '';

		// 3 or 6 hex digits, or the empty string.
		if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
			return $color;

		return '';
	}

	public function left_right( $value ) {
		$whitelist = array( 'left', 'right' );

		if ( in_array( $value, $whitelist ) )
			return $value;

		return 'right';
	}

	public function basic_html( $value ) {
		$allowed_html = array(
			'a' => array(
				'href' => array(),
				'title' => array(),
				'target' => array(),
				'class' => array(),
			),
			'i' => array(
				'class' => array(),
			),
			'br' => array(),
			'b' => array(),
			'em' => array(),
			'strong' => array()
		);
		return wp_kses( $value, $allowed_html );
	}

	public function text_field( $value ) {
		return sanitize_text_field( $value );
	}
}
