<?php global $wpc2; ?>
.footer-container {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'footer_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_font_color'); ?>
}
.site-info {
	font-size: <?php echo $wpc2['body_font_size_small']; ?>px;
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_info_font_color'); ?>
}
.site-footer .widget-title {
	<?php echo wpcanvas2_css_set_font_family( 'footer_widget_title_font_family', 'footer_widget_title_font_smoothing'); ?>
	font-size: <?php echo $wpc2['footer_widget_title_font_size']; ?>px;
	font-style: <?php echo $wpc2['footer_widget_title_font_style']; ?>;
	font-weight: <?php echo $wpc2['footer_widget_title_font_weight']; ?>;
	text-transform: <?php echo $wpc2['footer_widget_title_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['footer_widget_title_font_line_height']; ?>;
	<?php echo wpcanvas2_css_set_color( 'background-color', 'footer_title_font_background_color'); ?>
}
.site-footer .widget-title b,
.site-footer .widget-title strong {
	font-weight: <?php echo $wpc2['footer_widget_title_font_weight']; ?>;
}
.footer-widget-area .widget { 
	width: <?php echo $wpc2['footer_widget_width']; ?>px;
}
.site-footer .widget-title,
.site-footer .widget-title a,
.site-footer .wp-caption-text {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_title_font_color'); ?>
}
.site-info a,
.site-info a:visited,
.site-info a:focus,
.site-info a:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_info_link_font_color'); ?>
}
.site-info a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_info_link_font_hover_color'); ?>
}
.site-footer a,
.site-footer a:visited,
.site-footer a:focus,
.site-footer a:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_link_font_color'); ?>
}
.site-footer a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_link_font_hover_color'); ?>
}
.site-footer,
.site-footer div,
.site-footer span,
.site-footer applet,
.site-footer object,
.site-footer iframe,
.site-footer h1,
.site-footer h2,
.site-footer h3,
.site-footer h4,
.site-footer h5,
.site-footer h6,
.site-footer p,
.site-footer blockquote,
.site-footer pre,
.site-footer a,
.site-footer abbr,
.site-footer acronym,
.site-footer address,
.site-footer big,
.site-footer cite,
.site-footer code,
.site-footer del,
.site-footer dfn,
.site-footer em,
.site-footer img,
.site-footer ins,
.site-footer kbd,
.site-footer q,
.site-footer s,
.site-footer samp,
.site-footer small,
.site-footer strike,
.site-footer strong,
.site-footer sub,
.site-footer sup,
.site-footer tt,
.site-footer var,
.site-footer b,
.site-footer u,
.site-footer i,
.site-footer center,
.site-footer dl,
.site-footer dt,
.site-footer dd,
.site-footer ol,
.site-footer ul,
.site-footer li,
.site-footer fieldset,
.site-footer form,
.site-footer label,
.site-footer legend,
.site-footer table,
.site-footer caption,
.site-footer tbody,
.site-footer tfoot,
.site-footer thead,
.site-footer tr,
.site-footer th,
.site-footer td,
.site-footer article,
.site-footer aside,
.site-footer canvas,
.site-footer details,
.site-footer embed,
.site-footer figure,
.site-footer fieldset,
.site-footer figcaption,
.site-footer footer,
.site-footer header,
.site-footer hgroup,
.site-footer menu,
.site-footer nav,
.site-footer output,
.site-footer ruby,
.site-footer section,
.site-footer summary,
.site-footer time,
.site-footer mark,
.site-footer audio,
.site-footer video {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'footer_border_color'); ?>
}
.site-footer select,
.site-footer input,
.site-footer textarea {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'footer_form_border_color'); ?>
}
.site-footer select:focus,
.site-footer input:focus,
.site-footer textarea:focus {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'footer_form_border_focus_color'); ?>
}
<?php // Accent Colors ?>
.site-footer .widget_recent_entries .post-date {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_accent_color'); ?>
}
.site-footer .widget_calendar tbody td {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'footer_accent_color'); ?>
}
<?php // Button Links ?>
.site-footer .widget_calendar tbody a,
.site-footer .widget_calendar tbody a:visited,
.site-footer .widget_calendar tbody a:focus,
.site-footer .widget_calendar tbody a:active {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'footer_link_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_accent_color'); ?>
}
.site-footer .widget_calendar tbody a:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'footer_link_font_hover_color'); ?>
}
.site-footer button,
.site-footer input[type="button"],
.site-footer input[type="reset"],
.site-footer input[type="submit"],
.site-footer button:focus,
.site-footer input[type="button"]:focus,
.site-footer input[type="reset"]:focus,
.site-footer input[type="submit"]:focus,
.site-footer button:active,
.site-footer input[type="button"]:active,
.site-footer input[type="reset"]:active,
.site-footer input[type="submit"]:active,
.site-footer button:visited,
.site-footer input[type="button"]:visited,
.site-footer input[type="reset"]:visited,
.site-footer input[type="submit"]:visited {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_button_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'footer_button_font_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'footer_button_font_background_color'); ?>
}
.site-footer button:hover,
.site-footer input[type="button"]:hover,
.site-footer input[type="reset"]:hover,
.site-footer input[type="submit"]:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'footer_button_font_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'footer_button_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'footer_button_font_color'); ?>
}
