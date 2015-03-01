<?php global $wpc2; ?>
<?php // Yarpp ?>
#wrap .yarpp-related h3 {
	font-weight: <?php echo $wpc2['heading_font_weight']; ?> !important;
	font-size: <?php echo $wpc2['heading_font_size_h3']; ?>px !important;
	text-transform: <?php echo $wpc2['heading_font_text_transform']; ?> !important;
}
#wrap .yarpp-related a,
#wrap .yarpp-related a .yarpp-thumbnail-title {
	font-weight: <?php echo $wpc2['body_font_weight']; ?> !important;
}
<?php // WC Gallery ?>
#wrap .wc-gallery .gallery-caption p {
	font-size: <?php echo $wpc2['body_font_size_small']; ?>px;
}
#wrap .wc-image-links .gallery-caption a,
#wrap .wc-image-links .gallery-caption h3 {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_background_color' ); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'heading_font_color'); ?>
}
#wrap .wc-gallery-captions-onhover .wp-caption-text,
#wrap .wc-gallery-captions-showon .wp-caption-text {
	<?php echo wpcanvas2_css_set_rgba_color( 'background-color', 'caption_font_background_color', $wpc2['caption_font_background_opacity'] ); ?>
}
<?php // WC Shortcodes ?>
<?php // WC Shortcodes - Primary Button ?>
#wrap .wc-shortcodes-button.wc-shortcodes-button-primary:visited,
#wrap .wc-shortcodes-button.wc-shortcodes-button-primary {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_primary_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_primary'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_primary'); ?>
}

#wrap .wc-shortcodes-button.wc-shortcodes-button-primary:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_primary', -5); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_primary', -5); ?>
}

<?php // WC Shortcodes - Secondary Button ?>
#wrap .wc-shortcodes-button.wc-shortcodes-button-secondary:visited,
#wrap .wc-shortcodes-button.wc-shortcodes-button-secondary {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_secondary_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_secondary'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_secondary'); ?>
}

#wrap .wc-shortcodes-button.wc-shortcodes-button-secondary:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_secondary', -5); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_secondary', -5); ?>
}

<?php // WC Shortcodes - Inverse Button ?>
#wrap .wc-shortcodes-button.wc-shortcodes-button-inverse:visited,
#wrap .wc-shortcodes-button.wc-shortcodes-button-inverse {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_inverse_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_inverse'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_inverse'); ?>
}

#wrap .wc-shortcodes-button.wc-shortcodes-button-inverse:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_inverse', -5); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_inverse', -5); ?>
}

<?php // WC Shortcodes - Success Button ?>
#wrap .wc-shortcodes-button.wc-shortcodes-button-success:visited,
#wrap .wc-shortcodes-button.wc-shortcodes-button-success {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_success_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_success'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_success'); ?>
}

#wrap .wc-shortcodes-button.wc-shortcodes-button-success:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_success', -5); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_success', -5); ?>
}

<?php // WC Shortcodes - Warning Button ?>
#wrap .wc-shortcodes-button.wc-shortcodes-button-warning:visited,
#wrap .wc-shortcodes-button.wc-shortcodes-button-warning {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_warning_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_warning'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_warning'); ?>
}

#wrap .wc-shortcodes-button.wc-shortcodes-button-warning:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_warning', -5); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_warning', -5); ?>
}

<?php // WC Shortcodes - Danger Button ?>
#wrap .wc-shortcodes-button.wc-shortcodes-button-danger:visited,
#wrap .wc-shortcodes-button.wc-shortcodes-button-danger {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_danger_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_danger'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_danger'); ?>
}

#wrap .wc-shortcodes-button.wc-shortcodes-button-danger:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_danger', -5); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_danger', -5); ?>
}

<?php // WC Shortcodes - Info Button ?>
#wrap .wc-shortcodes-button.wc-shortcodes-button-info:visited,
#wrap .wc-shortcodes-button.wc-shortcodes-button-info {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_info_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_info'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_info'); ?>
}

#wrap .wc-shortcodes-button.wc-shortcodes-button-info:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_info', -5); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_info', -5); ?>
}
<?php // WC Shortcodes - Testimonials ?>
#wrap .wc-shortcodes-testimonial .wc-shortcodes-testimonial-content {
	<?php echo wpcanvas2_css_set_font_family( 'quote_font_family', 'quote_font_smoothing' ); ?>
	font-size: <?php echo $wpc2['quote_font_size']; ?>px;
	font-style: <?php echo $wpc2['quote_font_style']; ?>;
	font-weight: <?php echo $wpc2['quote_font_weight']; ?>;
	text-transform: <?php echo $wpc2['quote_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['quote_font_line_height']; ?>;
}
#wrap .wc-shortcodes-testimonial-content { 
	<?php echo wpcanvas2_css_set_color( 'border-top-color', 'content_accent_color', -15 ); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_accent_color' ); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'body_font_color' ); ?>
}
#wrap .wc-shortcodes-testimonial-content:after {
	<?php echo wpcanvas2_css_set_color( 'border-right-color', 'content_accent_color' ); ?>
}
#wrap .wc-shortcodes-testimonial-right .wc-shortcodes-testimonial-content:after {
	<?php echo wpcanvas2_css_set_color( 'border-left-color', 'content_accent_color' ); ?>
}
<?php // WC Shortcodes - Accordion ?>
#wrap .wc-shortcodes-accordion {
}
#wrap .wc-shortcodes-accordion .wc-shortcodes-accordion-trigger {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
#wrap .wc-shortcodes-accordion .wc-shortcodes-accordion-content {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
<?php // WC Shortcodes - Toggle ?>
.wc-shortcodes-toggle {
}
.wc-shortcodes-toggle .wc-shortcodes-toggle-trigger {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
.wc-shortcodes-toggle .wc-shortcodes-toggle-container {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
<?php // WC Shortcodes - Tabs ?>
.wc-shortcodes-tabs {
}
.wc-shortcodes-tabs ul.wcs-tabs-nav {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
.wc-shortcodes-tabs ul.wcs-tabs-nav li a {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
.wc-shortcodes-tabs ul.wcs-tabs-nav .wcs-state-active a {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_background_color' ); ?>
}
.wc-shortcodes-tabs ul.wcs-tabs-nav .wcs-state-active a:hover { }
.wc-shortcodes-tabs .tab-content {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_background_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
<?php // WC Shortcodes - Border ?>
.wc-shortcodes-divider.wc-shortcodes-divider-style-solid,
.wc-shortcodes-divider.wc-shortcodes-divider-style-dotted,
.wc-shortcodes-divider.wc-shortcodes-divider-style-dashed,
.wc-shortcodes-divider.wc-shortcodes-divider-line-double.wc-shortcodes-divider-style-solid,
.wc-shortcodes-divider.wc-shortcodes-divider-line-double.wc-shortcodes-divider-style-dotted,
.wc-shortcodes-divider.wc-shortcodes-divider-line-double.wc-shortcodes-divider-style-dashed {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
<?php // WC Shortcodes - Notification Box ?>
#wrap .wc-shortcodes-box-primary {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_primary'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_primary'); ?>
}
#wrap .wc-shortcodes-box-primary * {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_primary_contrast'); ?>
}
#wrap .wc-shortcodes-box-secondary {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_secondary'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_secondary'); ?>
}
#wrap .wc-shortcodes-box-secondary * {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_secondary_contrast'); ?>
}
#wrap .wc-shortcodes-box-inverse {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_inverse'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_inverse'); ?>
}
#wrap .wc-shortcodes-box-inverse * {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_inverse_contrast'); ?>
}
#wrap .wc-shortcodes-box-success {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_success'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_success'); ?>
}
#wrap .wc-shortcodes-box-success * {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_success_contrast'); ?>
}
#wrap .wc-shortcodes-box-warning {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_warning'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_warning'); ?>
}
#wrap .wc-shortcodes-box-warning * {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_warning_contrast'); ?>
}
#wrap .wc-shortcodes-box-danger {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_danger'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_danger'); ?>
}
#wrap .wc-shortcodes-box-danger * {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_danger_contrast'); ?>
}
#wrap .wc-shortcodes-box-info {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_info'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_info'); ?>
}
#wrap .wc-shortcodes-box-info * {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_info_contrast'); ?>
}
<?php // WC Shortcodes - Pricing ?>
#wrap .wc-shortcodes-pricing .wc-shortcodes-pricing-header {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_primary'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_primary_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_primary', -15); ?>
}
#wrap .wc-shortcodes-pricing .wc-shortcodes-pricing-header h5 {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_primary_contrast'); ?>
}
#wrap .wc-shortcodes-pricing .wc-shortcodes-pricing-cost {
	<?php echo wpcanvas2_css_set_color( 'border-top-color', 'color_primary', -15); ?>
}
#wrap .wc-shortcodes-pricing .wc-shortcodes-pricing-content {
	<?php echo wpcanvas2_css_set_color( 'background', 'content_background_color' ); ?>
	<?php echo wpcanvas2_css_set_color( 'border-left-color', 'content_accent_color', -15 ); ?>
	<?php echo wpcanvas2_css_set_color( 'border-right-color', 'content_accent_color', -15 ); ?>
}
#wrap .wc-shortcodes-pricing .wc-shortcodes-pricing-content ul li {
	<?php echo wpcanvas2_css_set_color( 'border-bottom-color', 'content_accent_color', -15 ); ?>
}
#wrap .wc-shortcodes-pricing .wc-shortcodes-pricing-content ul li:nth-child(2n+2) {
	<?php echo wpcanvas2_css_set_color( 'background', 'content_accent_color'); ?>
}
#wrap .wc-shortcodes-pricing .wc-shortcodes-pricing-button {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'content_accent_color', -15 ); ?>
}
#master #wrap .wc-shortcodes-pricing .wc-shortcodes-button:visited,
#master #wrap .wc-shortcodes-pricing .wc-shortcodes-button {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_primary_contrast' ); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_primary' ); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_primary', -5 ); ?>
}

#master #wrap .wc-shortcodes-pricing .wc-shortcodes-button:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_primary', -5 ); ?>
}

<?php // WC Shortcodes - Pricing Secondary ?>
#wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-secondary .wc-shortcodes-pricing-header {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_secondary'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_secondary_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_secondary', -15); ?>
}
#wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-secondary .wc-shortcodes-pricing-header h5 {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_secondary_contrast'); ?>
}
#wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-secondary .wc-shortcodes-pricing-cost {
	<?php echo wpcanvas2_css_set_color( 'border-top-color', 'color_secondary', -15); ?>
}
#master #wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-secondary .wc-shortcodes-button:visited,
#master #wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-secondary .wc-shortcodes-button {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_secondary_contrast' ); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_secondary' ); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_secondary', -5 ); ?>
}

#master #wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-secondary .wc-shortcodes-button:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_secondary', -5 ); ?>
}

<?php // WC Shortcodes - Pricing Inverse ?>
#wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-inverse .wc-shortcodes-pricing-header {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_inverse'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_inverse_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_inverse', -15); ?>
}
#wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-inverse .wc-shortcodes-pricing-header h5 {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_inverse_contrast'); ?>
}
#wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-inverse .wc-shortcodes-pricing-cost {
	<?php echo wpcanvas2_css_set_color( 'border-top-color', 'color_inverse', -15); ?>
}
#master #wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-inverse .wc-shortcodes-button:visited,
#master #wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-inverse .wc-shortcodes-button {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_inverse_contrast' ); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_inverse' ); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'color_inverse', -5 ); ?>
}

#master #wrap .wc-shortcodes-pricing.wc-shortcodes-pricing-type-inverse .wc-shortcodes-button:hover {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_inverse', -5 ); ?>
}

<?php // WC Shortcodes - Highlights ?>
#wrap .wc-shortcodes-highlight-yellow, .wc-shortcodes-highlight-yellow a {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_yellow'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_yellow_contrast'); ?>
}
#wrap .wc-shortcodes-highlight-blue, .wc-shortcodes-highlight-blue a {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_blue_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_blue'); ?>
}
#wrap .wc-shortcodes-highlight-green, .wc-shortcodes-highlight-green a {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_green_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_green'); ?>
}
#wrap .wc-shortcodes-highlight-red, .wc-shortcodes-highlight-red a {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_red_contrast'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_red'); ?>
}
#wrap .wc-shortcodes-highlight-gray, .wc-shortcodes-highlight-gray a {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_lightest_gray'); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_gray'); ?>
}
<?php // WC Shortcodes - Posts ?>
#wrap .wc-shortcodes-term-active {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_link_font_hover_color'); ?>
}
#wrap .wc-shortcodes-posts .wc-shortcodes-post-box {
	<?php echo wpcanvas2_css_set_color( 'background', 'content_background_color' ); ?>
}
<?php // WC Shortcodes - Countdown ?>
#wrap .wc-shortcodes-countdown {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'content_accent_color', -15 ); ?>
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_accent_color'); ?>
}
#wrap .wc-shortcodes-countdown.countdown_holding div {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_font_color'); ?>
}
#wrap .wc-shortcodes-countdown .countdown_section {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'content_accent_color', -15 ); ?>
}
<?php // WC Shortcodes - Share Buttons ?>
.wc-shortcodes-share-buttons li i {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_secondary' ); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_white' ); ?>
	font-size: <?php echo round( 0.6 * $wpc2['post_meta_font_size'] ); ?>px;
	height: <?php echo $wpc2['post_meta_font_size']; ?>px;
	line-height: <?php echo $wpc2['post_meta_font_size']; ?>px;
	width: <?php echo $wpc2['post_meta_font_size']; ?>px;
}
<?php // WC Shortcodes - Share Buttons ?>
pre {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_accent_color' ); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'body_font_color'); ?>
}
<?php // WC Shortcodes - Skillbar ?>
#wrap .wc-shortcodes-skillbar {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_accent_color' ); ?>
}
<?php // WooCommerce ?>
#master .woocommerce div.product form.cart .variations label,
#master .woocommerce-page div.product form.cart .variations label,
#master .woocommerce #content div.product form.cart .variations label,
#master .woocommerce-page #content div.product form.cart .variations label,
#master .woocommerce table.shop_attributes th,
#master .woocommerce-page table.shop_attributes th,
#master .woocommerce table.shop_table th,
#master .woocommerce-page table.shop_table th,
#master .woocommerce table.shop_table tfoot td,
#master .woocommerce-page table.shop_table tfoot td,
#master .woocommerce table.shop_table tfoot th,
#master .woocommerce-page table.shop_table tfoot th,
#master .woocommerce td.product-name dl.variation dt,
#master .woocommerce-page td.product-name dl.variation dt,
#master .woocommerce table.cart a.remove,
#master .woocommerce-page table.cart a.remove,
#master .woocommerce #content table.cart a.remove,
#master .woocommerce-page #content table.cart a.remove,
#master .woocommerce ul.cart_list li a,
#master .woocommerce-page ul.cart_list li a,
#master .woocommerce ul.product_list_widget li a,
#master .woocommerce-page ul.product_list_widget li a,
#master .woocommerce ul.cart_list li dl dt,
#master .woocommerce-page ul.cart_list li dl dt,
#master .woocommerce ul.product_list_widget li dl dt,
#master .woocommerce-page ul.product_list_widget li dl dt,
#master .woocommerce form .form-row .required,
#master .woocommerce-page form .form-row .required,
#master .woocommerce ul#shipping_method .amount,
#master .woocommerce-page ul#shipping_method .amount,
#master .woocommerce ol.commentlist.notes li.note p.meta,
#master .woocommerce-page ol.commentlist.notes li.note p.meta {
	font-weight: <?php echo $wpc2['body_font_bold_weight']; ?>;
}
#wrap .woocommerce span.onsale,
#master .woocommerce span.onsale,
#master .woocommerce-page span.onsale,
#master .woocommerce ul.products li.product .price,
#master .woocommerce-page ul.products li.product .price,
#master .woocommerce div.product .woocommerce-tabs ul.tabs li a,
#master .woocommerce-page div.product .woocommerce-tabs ul.tabs li a,
#master .woocommerce #content div.product .woocommerce-tabs ul.tabs li a,
#master .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a,
#master .woocommerce .quantity input.qty,
#master .woocommerce-page .quantity input.qty,
#master .woocommerce #content .quantity input.qty,
#master .woocommerce-page #content .quantity input.qty,
#master .woocommerce .quantity .plus,
#master .woocommerce-page .quantity .plus,
#master .woocommerce #content .quantity .plus,
#master .woocommerce-page #content .quantity .plus,
#master .woocommerce .quantity .minus,
#master .woocommerce-page .quantity .minus,
#master .woocommerce #content .quantity .minus,
#master .woocommerce-page #content .quantity .minus,
#master .woocommerce table.shop_table td small,
#master .woocommerce-page table.shop_table td small,
#master .woocommerce .cart-collaterals .shipping_calculator .shipping-calculator-button:after,
#master .woocommerce-page .cart-collaterals .shipping_calculator .shipping-calculator-button:after,
#master .woocommerce .checkout .create-account small,
#master .woocommerce-page .checkout .create-account small,
#master .woocommerce #payment ul.payment_methods li,
#master .woocommerce-page #payment ul.payment_methods li,
#master .woocommerce #payment div.payment_box span.help,
#master .woocommerce-page #payment div.payment_box span.help,
#master .woocommerce ul.digital-downloads li:before,
#master .woocommerce-page ul.digital-downloads li:before,
#master .woocommerce .widget_layered_nav ul li.chosen a:before,
#master .woocommerce-page .widget_layered_nav ul li.chosen a:before,
#master .woocommerce .widget_layered_nav_filters ul li a:before,
#master .woocommerce-page .widget_layered_nav_filters ul li a:before {
	font-weight: <?php echo $wpc2['body_font_weight']; ?>;
}
#master .woocommerce .woocommerce-message,
#master .woocommerce-page .woocommerce-message,
#master .woocommerce .woocommerce-error,
#master .woocommerce-page .woocommerce-error,
#master .woocommerce .woocommerce-info,
#master .woocommerce-page .woocommerce-info,
#master .woocommerce div.product .woocommerce-tabs ul.tabs li,
#master .woocommerce-page div.product .woocommerce-tabs ul.tabs li,
#master .woocommerce #content div.product .woocommerce-tabs ul.tabs li,
#master .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,
#master .woocommerce .quantity .plus,
#master .woocommerce-page .quantity .plus,
#master .woocommerce #content .quantity .plus,
#master .woocommerce-page #content .quantity .plus,
#master .woocommerce .quantity .minus,
#master .woocommerce-page .quantity .minus,
#master .woocommerce #content .quantity .minus,
#master .woocommerce-page #content .quantity .minus,
#master .woocommerce .quantity .plus,
#master .woocommerce-page .quantity .plus,
#master .woocommerce #content .quantity .plus,
#master .woocommerce-page #content .quantity .plus,
#master .woocommerce .quantity .minus,
#master .woocommerce-page .quantity .minus,
#master .woocommerce #content .quantity .minus,
#master .woocommerce-page #content .quantity .minus {
	<?php echo wpcanvas2_css_set_color( 'background', 'content_accent_color' ); ?>
}
#master .woocommerce .quantity .plus:hover,
#master .woocommerce-page .quantity .plus:hover,
#master .woocommerce #content .quantity .plus:hover,
#master .woocommerce-page #content .quantity .plus:hover,
#master .woocommerce .quantity .minus:hover,
#master .woocommerce-page .quantity .minus:hover,
#master .woocommerce #content .quantity .minus:hover,
#master .woocommerce-page #content .quantity .minus:hover {
	<?php echo wpcanvas2_css_set_color( 'background', 'content_accent_color', -15 ); ?>
}
#master .woocommerce #payment div.payment_box,
#master .woocommerce-page #payment div.payment_box,
#master .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
#master .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
#master .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
#master .woocommerce-page .widget_price_filter .price_slider_wrapper .ui-widget-content {
	<?php echo wpcanvas2_css_set_color( 'background', 'content_accent_color', -15 ); ?>
}
#master .woocommerce #payment div.payment_box:after,
#master .woocommerce-page #payment div.payment_box:after {
	<?php echo wpcanvas2_css_set_color( 'border-bottom-color', 'content_accent_color', -15 ); ?>
}
#master .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
#master .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,
#master .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
#master .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active {
	<?php echo wpcanvas2_css_set_color( 'background', 'content_background_color' ); ?>
}
#master .woocommerce .woocommerce-breadcrumb,
#master .woocommerce-page .woocommerce-breadcrumb {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_font_color'); ?>
}
#master .woocommerce .woocommerce-breadcrumb a,
#master .woocommerce-page .woocommerce-breadcrumb a {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_link_font_color'); ?>
}
#master .woocommerce .woocommerce-breadcrumb a:hover,
#master .woocommerce-page .woocommerce-breadcrumb a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_link_font_hover_color'); ?>
}
#wrap .woocommerce span.onsale,
#master .woocommerce span.onsale,
#master .woocommerce-page span.onsale {
	<?php echo wpcanvas2_css_set_color( 'background', 'color_secondary' ); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'color_secondary_contrast' ); ?>
}
#master .woocommerce p.stars a,
#master .woocommerce-page p.stars a,
#master .woocommerce .star-rating span:before,
#master .woocommerce-page .star-rating span:before {
	<?php echo wpcanvas2_css_set_color( 'color', 'color_yellow' ); ?>
}
<?php // Jetpack ?>
#wrap .sd-social-icon .sd-content ul li[class*='share-'] a.sd-button {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'color_secondary' ); ?>
	height: <?php echo $wpc2['post_meta_font_size']; ?>px;
	width: <?php echo $wpc2['post_meta_font_size']; ?>px;
}
#wrap .sd-social-icon .sd-content ul li[class*='share-'] a.sd-button:before {
	top: 4px;
	font-size: <?php echo $wpc2['post_meta_font_size'] - 8; ?>px;
	<?php echo wpcanvas2_css_set_color( 'color', 'color_white' ); ?>
}
#wrap .contact-form label,
#wrap div#jp-relatedposts div.jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-title a {
	font-weight: <?php echo $wpc2['body_font_bold_weight']; ?>;
}
#wrap div#jp-relatedposts h3.jp-relatedposts-headline em:before {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color' ); ?>
}
#wrap .tiled-gallery-caption {
	<?php echo wpcanvas2_css_set_rgba_color( 'background-color', 'caption_font_background_color', $wpc2['caption_font_background_opacity'] ); ?>
	<?php echo wpcanvas2_css_set_color( 'color', 'caption_font_color'); ?>
	font-size: <?php echo $wpc2['body_font_size_small']; ?>px;
	font-weight: <?php echo $wpc2['body_font_weight']; ?>;
}
#wrap .tiled-gallery .tiled-gallery-item-small .tiled-gallery-caption {
	font-size: <?php echo $wpc2['body_font_size_xsmall']; ?>px;
}
