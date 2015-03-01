<?php global $wpc2; ?>
.sidebar-background {
	padding: <?php echo $wpc2['sidebar_padding']; ?>px;
}
.widget-area .widget-title {
	<?php echo wpcanvas2_css_set_font_family( 'sidebar_widget_title_font_family', 'sidebar_widget_title_font_smoothing'); ?>
	font-size: <?php echo $wpc2['sidebar_widget_title_font_size']; ?>px;
	font-style: <?php echo $wpc2['sidebar_widget_title_font_style']; ?>;
	font-weight: <?php echo $wpc2['sidebar_widget_title_font_weight']; ?>;
	text-transform: <?php echo $wpc2['sidebar_widget_title_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['sidebar_widget_title_font_line_height']; ?>;
}
.widget-area .widget-title b,
.widget-area .widget-title strong {
	font-weight: <?php echo $wpc2['sidebar_widget_title_font_weight']; ?>;
}
.widget-area {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_font_color'); ?>
}
.widget-area .widget-title,
.widget-area .widget-title a,
.widget-area .wp-caption-text {
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_title_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_title_font_background_color'); ?>
}
.widget-area a,
.widget-area a:visited,
.widget-area a:focus,
.widget-area a:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_link_font_color'); ?>
}
.widget-area a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_link_font_hover_color'); ?>
}
.widget-area,
.widget-area div,
.widget-area span,
.widget-area applet,
.widget-area object,
.widget-area iframe,
.widget-area h1,
.widget-area h2,
.widget-area h3,
.widget-area h4,
.widget-area h5,
.widget-area h6,
.widget-area p,
.widget-area blockquote,
.widget-area pre,
.widget-area a,
.widget-area abbr,
.widget-area acronym,
.widget-area address,
.widget-area big,
.widget-area cite,
.widget-area code,
.widget-area del,
.widget-area dfn,
.widget-area em,
.widget-area img,
.widget-area ins,
.widget-area kbd,
.widget-area q,
.widget-area s,
.widget-area samp,
.widget-area small,
.widget-area strike,
.widget-area strong,
.widget-area sub,
.widget-area sup,
.widget-area tt,
.widget-area var,
.widget-area b,
.widget-area u,
.widget-area i,
.widget-area center,
.widget-area dl,
.widget-area dt,
.widget-area dd,
.widget-area ol,
.widget-area ul,
.widget-area li,
.widget-area fieldset,
.widget-area form,
.widget-area label,
.widget-area legend,
.widget-area table,
.widget-area caption,
.widget-area tbody,
.widget-area tfoot,
.widget-area thead,
.widget-area tr,
.widget-area th,
.widget-area td,
.widget-area article,
.widget-area aside,
.widget-area canvas,
.widget-area details,
.widget-area embed,
.widget-area figure,
.widget-area fieldset,
.widget-area figcaption,
.widget-area footer,
.widget-area header,
.widget-area hgroup,
.widget-area menu,
.widget-area nav,
.widget-area output,
.widget-area ruby,
.widget-area section,
.widget-area summary,
.widget-area time,
.widget-area mark,
.widget-area audio,
.widget-area video {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'sidebar_border_color'); ?>
}
.widget-area select,
.widget-area input,
.widget-area textarea {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'sidebar_form_border_color'); ?>
}
.widget-area select:focus,
.widget-area input:focus,
.widget-area textarea:focus {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'sidebar_form_border_focus_color'); ?>
}
<?php // Accent Colors ?>
.widget-area .widget_recent_entries .post-date {
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_accent_color'); ?>
}
.widget-area .widget_calendar tbody td {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_accent_color'); ?>
}
<?php // Button Links ?>
.widget-area .widget_calendar tbody a,
.widget-area .widget_calendar tbody a:visited,
.widget-area .widget_calendar tbody a:focus,
.widget-area .widget_calendar tbody a:active {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_link_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_accent_color'); ?>
}
.widget-area .widget_calendar tbody a:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_link_font_hover_color'); ?>
}
.widget-area button,
.widget-area input[type="button"],
.widget-area input[type="reset"],
.widget-area input[type="submit"],
.widget-area button:focus,
.widget-area input[type="button"]:focus,
.widget-area input[type="reset"]:focus,
.widget-area input[type="submit"]:focus,
.widget-area button:active,
.widget-area input[type="button"]:active,
.widget-area input[type="reset"]:active,
.widget-area input[type="submit"]:active,
.widget-area button:visited,
.widget-area input[type="button"]:visited,
.widget-area input[type="reset"]:visited,
.widget-area input[type="submit"]:visited {
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_button_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_button_font_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'sidebar_button_font_background_color'); ?>
}
.widget-area button:hover,
.widget-area input[type="button"]:hover,
.widget-area input[type="reset"]:hover,
.widget-area input[type="submit"]:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'sidebar_button_font_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'sidebar_button_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'sidebar_button_font_color'); ?>
}
