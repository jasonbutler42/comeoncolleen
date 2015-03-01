<?php global $wpc2; ?>
.header-container { 
	<?php echo wpcanvas2_css_set_background_image( 'header_background_image'); ?>
	background-repeat: <?php echo $wpc2['header_background_repeat']; ?>;
	background-position: <?php echo $wpc2['header_background_position']; ?>;
	<?php echo wpcanvas2_css_set_color( 'background-color', 'header_background_color'); ?>
}
.site-title {
	padding-bottom: <?php echo $wpc2['title_bottom_padding']; ?>px;
	<?php echo wpcanvas2_css_set_font_family( 'title_font_family', 'title_font_smoothing'); ?>
	font-size: <?php echo $wpc2['title_font_size']; ?>px;
	font-style: <?php echo $wpc2['title_font_style']; ?>;
	font-weight: <?php echo $wpc2['title_font_weight']; ?>;
	text-transform: <?php echo $wpc2['title_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['title_font_line_height']; ?>;
}
.site-title b,
.site-title strong {
	font-weight: <?php echo $wpc2['title_font_weight']; ?>;
}
.site-title,
.site-title a,
.site-title a:active,
.site-title a:focus,
.site-title a:visited,
.site-title a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'title_font_color'); ?>
}
.site-description {
	<?php echo wpcanvas2_css_set_font_family( 'description_font_family', 'description_font_smoothing'); ?>
	font-size: <?php echo $wpc2['description_font_size']; ?>px;
	font-style: <?php echo $wpc2['description_font_style']; ?>;
	font-weight: <?php echo $wpc2['description_font_weight']; ?>;
	text-transform: <?php echo $wpc2['description_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['description_font_line_height']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'description_font_color'); ?>
}
.site-description b,
.site-description strong {
	font-weight: <?php echo $wpc2['description_font_weight']; ?>;
}
.site-branding {
	padding-top: <?php echo $wpc2['header_top_padding']; ?>px;
	padding-bottom: <?php echo $wpc2['header_bottom_padding']; ?>px;
}
.site-logo {
	padding-bottom: <?php echo $wpc2['logo_bottom_padding']; ?>px;
}
