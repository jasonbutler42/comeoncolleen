<?php global $wpc2; ?>
<?php // buttons ?>
a.more-link,
#wrap .wc-shortcodes-filtering .wc-shortcodes-term,
#wrap #page a.button,
#wrap #page button.button,
#wrap #page input.button,
#wrap #page #respond input#submit,
#wrap #page #content input.button,
#wrap #page .woocommerce-pagination a,
#wrap #page .woocommerce-pagination span,
#wrap .wc-shortcodes-button,
body #infinite-handle span,
.comment-navigation a,
.paging-navigation a,
.paging-navigation span,
.post-navigation a,
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	<?php echo wpcanvas2_css_set_font_family( 'button_font_family', 'button_font_smoothing'); ?>
	font-size: <?php echo $wpc2['button_font_size']; ?>px;
	font-style: <?php echo $wpc2['button_font_style']; ?>;
	font-weight: <?php echo $wpc2['button_font_weight']; ?>;
	text-transform: <?php echo $wpc2['button_font_text_transform']; ?>;
	padding-top: <?php echo $wpc2['button_top_padding']; ?>px;
	padding-bottom: <?php echo $wpc2['button_bottom_padding']; ?>px;
	padding-left: <?php echo $wpc2['button_side_padding']; ?>px;
	padding-right: <?php echo $wpc2['button_side_padding']; ?>px;
}
a.more-link,
#wrap .wc-shortcodes-filtering .wc-shortcodes-term,
#wrap #page a.button,
#wrap #page button.button,
#wrap #page input.button,
#wrap #page #respond input#submit,
#wrap #page #content input.button,
#wrap #page .woocommerce-pagination a,
#wrap #page .woocommerce-pagination span,
body #infinite-handle span,
.comment-navigation a,
.paging-navigation a,
.post-navigation a,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
a.more-link:visited,
#wrap .wc-shortcodes-filtering .wc-shortcodes-term:visited,
#wrap #page a.button:visited,
#wrap #page button.button:visited,
#wrap #page input.button:visited,
#wrap #page #respond input#submit:visited,
#wrap #page #content input.button:visited,
#wrap #page .woocommerce-pagination a:visited,
#wrap #page .woocommerce-pagination span:visited,
body #infinite-handle span:visited,
.comment-navigation a:visited,
.paging-navigation a:visited,
.post-navigation a:visited,
button:visited,
input[type="button"]:visited,
input[type="reset"]:visited,
input[type="submit"]:visited,
a.more-link:focus,
#wrap .wc-shortcodes-filtering .wc-shortcodes-term:focus,
#wrap #page a.button:focus,
#wrap #page button.button:focus,
#wrap #page input.button:focus,
#wrap #page #respond input#submit:focus,
#wrap #page #content input.button:focus,
#wrap #page .woocommerce-pagination a:focus,
#wrap #page .woocommerce-pagination span:focus,
body #infinite-handle span:focus,
.comment-navigation a:focus,
.paging-navigation a:focus,
.post-navigation a:focus,
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
a.more-link:active,
#wrap .wc-shortcodes-filtering .wc-shortcodes-term:active,
#wrap #page a.button:active,
#wrap #page button.button:active,
#wrap #page input.button:active,
#wrap #page #respond input#submit:active,
#wrap #page #content input.button:active,
#wrap #page .woocommerce-pagination a:active,
#wrap #page .woocommerce-pagination span:active,
body #infinite-handle span:active,
.comment-navigation a:active,
.paging-navigation a:active,
.post-navigation a:active,
button:active,
input[type="button"]:active,
input[type="reset"]:active,
input[type="submit"]:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'button_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'button_font_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'button_font_background_color'); ?>
}
a.more-link:hover,
#wrap .wc-shortcodes-filtering .wc-shortcodes-term:hover,
#wrap #page a.button:hover,
#wrap #page button.button:hover,
#wrap #page input.button:hover,
#wrap #page #respond input#submit:hover,
#wrap #page #content input.button:hover,
#wrap #page .woocommerce-pagination a:hover,
#wrap #page .woocommerce-pagination span:hover,
body #infinite-handle span:hover,
.comment-navigation a:hover,
.paging-navigation a:hover,
.post-navigation a:hover,
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'button_font_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'button_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'button_font_color'); ?>
}
#wrap #page .woocommerce-pagination span.current,
#wrap #page .woocommerce-pagination span.dots,
.paging-navigation span {
	<?php echo wpcanvas2_css_set_color( 'color', 'button_font_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'button_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'button_font_color'); ?>
}
<?php // button spacing for font icons ?>
.wc-shortcodes-font-awesome-enabled #infinite-handle span,
.wc-shortcodes-font-awesome-enabled .comment-navigation .nav-previous a,
.wc-shortcodes-font-awesome-enabled .navigation .prev.page-numbers,
.wc-shortcodes-font-awesome-enabled .paging-navigation .nav-previous a,
.wc-shortcodes-font-awesome-enabled .post-navigation .nav-previous a {
	padding-left: <?php echo round( $wpc2['button_side_padding'] + 15 ); ?>px;
}
.wc-shortcodes-font-awesome-enabled #infinite-handle span:before,
.wc-shortcodes-font-awesome-enabled .comment-navigation .nav-previous a:before,
.wc-shortcodes-font-awesome-enabled .navigation .prev.page-numbers:before,
.wc-shortcodes-font-awesome-enabled .paging-navigation .nav-previous a:before,
.wc-shortcodes-font-awesome-enabled .post-navigation .nav-previous a:before {
	bottom: <?php echo $wpc2['button_bottom_padding'] + $wpc2['button_icon_offset']; ?>px;
	left: <?php echo $wpc2['button_side_padding']; ?>px;
}
.wc-shortcodes-font-awesome-enabled a.more-link,
.wc-shortcodes-font-awesome-enabled .comment-navigation .nav-next a,
.wc-shortcodes-font-awesome-enabled .navigation .next.page-numbers,
.wc-shortcodes-font-awesome-enabled .paging-navigation .nav-next a,
.wc-shortcodes-font-awesome-enabled .post-navigation .nav-next a {
	padding-right: <?php echo round( $wpc2['button_side_padding'] + 15 ); ?>px;
}
.wc-shortcodes-font-awesome-enabled a.more-link:after,
.wc-shortcodes-font-awesome-enabled .comment-navigation .nav-next a:after,
.wc-shortcodes-font-awesome-enabled .navigation .next.page-numbers:after,
.wc-shortcodes-font-awesome-enabled .paging-navigation .nav-next a:after,
.wc-shortcodes-font-awesome-enabled .post-navigation .nav-next a:after {
	bottom: <?php echo $wpc2['button_bottom_padding'] + $wpc2['button_icon_offset']; ?>px;
	right: <?php echo $wpc2['button_side_padding']; ?>px;
}
<?php // horizontal buttons ?>
#wrap #page div.product form.cart input,
#wrap #page div.product form.cart button,
#wrap #page table.shop_table .quantity input,
#wrap #page table.shop_table .actions input,
.page-content .search-form *,
.post-password-form * {
	height: <?php echo round( $wpc2['body_font_size'] * 1.3 ) + 7 + 7 + 2; ?>px;
}
