<?php global $wpc2; ?>
.main-navigation .menu-toggle,
.main-navigation a,
.main-navigation a:visited,
.main-navigation a:focus,
.main-navigation a:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'menu_bar_font_color'); ?>
}
.main-navigation li:hover > a {
	<?php echo wpcanvas2_css_set_color( 'color', 'menu_bar_font_hover_color'); ?>
}
.main-navigation .menu-toggle,
.main-navigation a {
	padding-top: <?php echo $wpc2['menu_bar_item_top_padding']; ?>px;
	padding-bottom: <?php echo $wpc2['menu_bar_item_bottom_padding']; ?>px;
}
.main-navigation a {
	padding-left: <?php echo $wpc2['menu_bar_item_side_padding']; ?>px;
	padding-right: <?php echo $wpc2['menu_bar_item_side_padding']; ?>px;
}
.main-navigation .menu-toggle,
.nav-container {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'menu_bar_border_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'menu_bar_background_color'); ?>
}
.main-navigation .menu-toggle,
.main-navigation {
	<?php echo wpcanvas2_css_set_font_family( 'menu_font_family', 'menu_font_smoothing'); ?>
	font-size: <?php echo $wpc2['menu_font_size']; ?>px;
	font-style: <?php echo $wpc2['menu_font_style']; ?>;
	font-weight: <?php echo $wpc2['menu_font_weight']; ?>;
	text-transform: <?php echo $wpc2['menu_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['menu_font_line_height']; ?>;
}
.nav-bottom-border,
.nav-container {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'menu_bar_border_color'); ?>
}
.main-navigation b,
.main-navigation strong {
	font-weight: <?php echo $wpc2['menu_font_weight']; ?>;
}
#wrap .main-navigation ul ul li {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'menu_bar_border_color'); ?>
}
.main-navigation ul ul li a {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'dropdown_background_color'); ?>
}
.main-navigation ul ul a {
	padding-top: <?php echo $wpc2['dropdown_item_top_padding']; ?>px;
	padding-bottom: <?php echo $wpc2['dropdown_item_bottom_padding']; ?>px;
}
.main-navigation ul ul a,
.main-navigation ul ul a:visited,
.main-navigation ul ul a:focus,
.main-navigation ul ul a:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'dropdown_font_color'); ?>
}
.main-navigation ul ul a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'dropdown_font_hover_color'); ?>
}
