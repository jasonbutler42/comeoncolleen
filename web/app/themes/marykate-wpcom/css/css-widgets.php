<?php global $wpc2; ?>
.widget_mc4wp_widget .mc4wp-form label {
	font-weight: <?php echo $wpc2['body_font_weight']; ?>;
}
<?php // About Me ?>
.widget_wordpresscanvas_about_me .sidebar-caption {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_accent_color' ); ?>
	font-size: <?php echo $wpc2['body_font_size_small']; ?>px;
}
<?php // Image ?>
#wrap .jetpack-image-container .wp-caption-text {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_accent_color' ); ?>
	font-size: <?php echo $wpc2['body_font_size_small']; ?>px;
}
