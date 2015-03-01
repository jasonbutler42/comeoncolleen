<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

class WPC2_Customize_Font_Control extends WP_Customize_Control {

	/**
	* Enqueue the styles and scripts
	*/
	public function enqueue() {
		global $wpc2_fonts_list;

		wp_enqueue_style( 'wpcanvas2-autocomplete', get_template_directory_uri() . '/inc/classes/css/autocomplete.css', array(), WPCANVAS2_VERSION );
		wp_enqueue_script( 'wpcanvas2-autocomplete', get_template_directory_uri() . '/inc/classes/js/jquery.autocomplete.min.js', array( 'jquery' ), '1.2.9', true );
		wp_enqueue_script( 'wpcanvas2-fonts', get_template_directory_uri() . '/inc/classes/js/fonts.js', array( 'jquery' ), WPCANVAS2_VERSION, true );
		wp_localize_script( 'wpcanvas2-fonts', 'wpc2_fonts', $wpc2_fonts_list->fonts );
	}

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   10/16/2012
	 * @return  void
	 */
	public function render_content() {
		?>
		<label class="wpc2-autocomplete-wrapper">
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<input placeholder="Start typing a font name" class="wpc2-fonts-autocomplete" type="text" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
		</label>
		<?php
	}

	/* public function render_content() {
		global $wpc2_fonts_list;
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<select <?php $this->link(); ?>>
				<?php
				foreach ( $wpc2_fonts_list->fonts as $value => $label )
					echo '<option value="' . esc_attr( $label ) . '"' . selected( $this->value(), $label, false ) . '>' . $label . '</option>';
				?>
			</select>
		</label>
		<?php
	} */

}

class WPC2_Customize_Image_Control extends WP_Customize_Control {
	public function enqueue() {
		wp_enqueue_style( 'wpcanvas2-media', get_template_directory_uri() . '/inc/classes/css/media.css', array(), WPCANVAS2_VERSION );
		wp_enqueue_media();
		wp_enqueue_script( 'wpcanvas2-media', get_template_directory_uri() . '/inc/classes/js/media.js', array( 'jquery' ), WPCANVAS2_VERSION, true );
	}

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   10/16/2012
	 * @return  void
	 */
	public function render_content() {
		$option_name = 'wpc2_' . $this->id;

		$val = $this->value();
		$default = $this->setting->default;

		// preview image default style
		$style = '';
		if ( empty( $val ) )
			$style = ' style="display:none"';

		?>
		<div class="wpcanvas2-image-upload-wrapper">
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<input id="<?php echo $option_name; ?>" class="wpcanvas2-image-upload-input" type="text" value="<?php echo esc_attr( $val ); ?>" <?php $this->link(); ?> />
				<br />
				<a class="button wpcanvas2-image-upload" data-target="#<?php echo $option_name; ?>" data-preview=".wpcanvas2-preview-image" data-frame="select" data-state="wpcanvas2_insert_single" data-fetch="url" data-title="Insert Image" data-button="Insert" data-class="media-frame wpcanvas2-custom-uploader" title="Add Media">Add Media</a>
				<a class="button wpcanvas2-restore-image" data-restore="<?php echo $default; ?>" data-target="#<?php echo $option_name; ?>" data-preview=".wpcanvas2-preview-image">Default</a>
				<a class="button wpcanvas2-delete-image" data-target="#<?php echo $option_name; ?>" data-preview=".wpcanvas2-preview-image">Delete</a>
				<p class="wpcanvas2-preview-image"<?php echo $style; ?>><img src="<?php echo esc_attr( $val ); ?>" /></p>
			</label>
		</div>
		<?php
	}

}

class WPC2_Customize_Upload_Fonts_Control extends WP_Customize_Control {
	public function enqueue() {
		wp_enqueue_style( 'wpcanvas2-customize', get_template_directory_uri() . '/inc/classes/css/customize.css', array(), WPCANVAS2_VERSION );
		wp_enqueue_style( 'wpcanvas2-media', get_template_directory_uri() . '/inc/classes/css/media.css', array(), WPCANVAS2_VERSION );
		wp_enqueue_media();
		wp_enqueue_script( 'wpcanvas2-media', get_template_directory_uri() . '/inc/classes/js/media.js', array( 'jquery' ), WPCANVAS2_VERSION, true );
	}

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   10/16/2012
	 * @return  void
	 */
	public function render_content() {
		?>
		<div class="wpcanvas2-font-upload-wrapper">
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<textarea class="large-text wpcanvas2-upload-font-textarea" cols="20" rows="12" <?php $this->link(); ?>>
					<?php echo esc_textarea( $this->value() ); ?>
				</textarea>
			</label>
			<a class="button wpcanvas2-image-upload" data-target=".wpcanvas2-upload-font-textarea" data-frame="select" data-state="wpcanvas2_insert_fonts" data-fetch="fonts" data-title="Insert Font" data-button="Insert" data-class="media-frame" title="Add Font"><span class="wp-media-buttons-icon"></span> <?php echo __( 'Add Font', 'wpcanvas2' ); ?></a>
		</div>
		<?php
	}

}

class WPC2_Customize_Textarea_Control extends WP_Customize_Control {
	public function enqueue() {
		wp_enqueue_style( 'wpcanvas2-customize', get_template_directory_uri() . '/inc/classes/css/customize.css', array(), WPCANVAS2_VERSION );
	}

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   10/16/2012
	 * @return  void
	 */
	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea class="large-text" cols="20" rows="7" <?php $this->link(); ?>>
				<?php echo esc_textarea( $this->value() ); ?>
			</textarea>
		</label>
		<?php
	}

}

class WPC2_Customize_CSS_Textarea_Control extends WP_Customize_Control {
	public function enqueue() {
		wp_enqueue_style( 'wpcanvas2-customize', get_template_directory_uri() . '/inc/classes/css/customize.css', array(), WPCANVAS2_VERSION );
	}

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   10/16/2012
	 * @return  void
	 */
	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea class="large-text wpcanvas2-css-textarea" cols="20" rows="12" <?php $this->link(); ?>>
				<?php echo esc_textarea( $this->value() ); ?>
			</textarea>
		</label>
		<?php
	}

}
