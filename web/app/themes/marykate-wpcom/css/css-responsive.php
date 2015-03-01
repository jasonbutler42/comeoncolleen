<?php global $wpc2; ?>
<?php // Grid ?>
<?php $content_width = $wpc2['content_width']; ?>
<?php $site_width = $wpc2['site_width']; ?>
<?php $full_content_border_width = $wpc2['full_content_border_width']; ?>
<?php $scrollbar = 20; ?>

<?php while ( $full_content_border_width > 992 ) : ?>
@media screen and (min-width: <?php echo $full_content_border_width-99; ?>px) and (max-width: <?php echo $full_content_border_width + $scrollbar; ?>px) {
	<?php $full_content_border_width -= 100; ?>
	<?php $content_width -= 100; ?>
	<?php $site_width -= 100; ?>
	.site-boundary { 
		width: <?php echo $full_content_border_width; ?>px;
	}
	.display-sidebar .content-area { 
		width: <?php echo $content_width; ?>px;
	}
}
<?php endwhile; ?>

@media screen and (max-width: <?php echo $full_content_border_width + $scrollbar; ?>px) {
	body .site-padding,
	body .site-header,
	body .main-navigation .menu,
	body .site-content,
	body .footer-widget-area,
	body .site-info {
		padding-left: 20px;
		padding-right: 20px;
	}
	#wrap .site-boundary {
		width: auto;
	}
	#wrap .content-area {
		width: auto;
		float: none;
		margin: 0 auto;
	}
	.main-navigation {
		width: auto;
	}
	#wrap .widget-area {
		float: none;
		margin: 3em auto 0 auto;
	}
}

<?php // iPhone ?>
@media screen and (max-width: 568px) {
	body .right-background {
		padding-left: 0;
		padding-right: 0;
	}
	body .site-box {
	}
	body.single-post .entry-header .entry-title,
	body.blog .entry-header .entry-title {
		width: auto;
	}
	body.single-post .entry-header .entry-meta,
	body.blog .entry-header .entry-meta {
		width: auto;
	}
	body .comment-navigation .nav-previous,
	body .paging-navigation .nav-previous,
	body .post-navigation .nav-previous {
		float: none;
		max-width: none;
		text-align: center;
		margin-bottom: 10px;
	}
	body .comment-navigation .nav-next,
	body .paging-navigation .nav-next,
	body .post-navigation .nav-next {
		float: none;
		max-width: none;
		text-align: center;
	}
	body .comment-navigation .nav-previous a,
	body .paging-navigation .nav-previous a,
	body .post-navigation .nav-previous a,
	body .comment-navigation .nav-next a,
	body .paging-navigation .nav-next a,
	body .post-navigation .nav-next a {
		display: block;
	}
	#wrap .entry-header > span,
	#wrap .entry-header > div,
	#wrap .entry-header > .entry-title,
	#wrap .entry-footer > span,
	#wrap .entry-footer > div,
	#wrap .post-meta > span,
	#wrap .post-meta > div {
		display: block;
		float: none;
		width: auto;
		text-align: left;
	}
	#wrap .wc-shortcodes-social-icons {
		text-align: center;
	}
	#wrap .entry-thumbnail {
		float: none;
		margin-top: 0;
		margin-bottom: 1.5em;
	}
	#wrap .entry-excerpt.has-post-thumbnail {
		margin-left: 0;
		padding-left: 0 !important;
	}
	#wrap .alignleft,
	#wrap .alignright,
	#wrap .aligncenter,
	#wrap .alignnone {
		margin: 1.5em 0;
		display: block;
		float: none;
	}
	#wrap .main-navigation {
		padding-left: 0;
		padding-right: 0;
	}
}

<?php // Small Tablets ?>
@media screen and (max-width: 768px) {
	body#wrap .site-title {
		font-size: <?php echo wpcanvas2_mul_px( 'title_font_size', 0.7 ); ?>px;
	}
	body#wrap .site-description {
		font-size: <?php echo wpcanvas2_mul_px( 'description_font_size', 0.7 ); ?>px;
	}
	#wrap .comment-list .children {
		padding-left: 0;
	}
}

<?php // iPad ?>
@media screen and (max-width: 991px) {
	body .site-title {
		font-size: <?php echo wpcanvas2_mul_px( 'title_font_size', 0.85 ); ?>px;
	}
	body .site-description {
		font-size: <?php echo wpcanvas2_mul_px( 'description_font_size', 0.85 ); ?>px;
	}
	body .wc-shortcodes-one-half,
	body .wc-shortcodes-one-third,
	body .wc-shortcodes-two-third,
	body .wc-shortcodes-three-fourth,
	body .wc-shortcodes-one-fourth,
	body .wc-shortcodes-one-fifth,
	body .wc-shortcodes-two-fifth,
	body .wc-shortcodes-three-fifth,
	body .wc-shortcodes-four-fifth,
	body .wc-shortcodes-one-sixth,
	body .wc-shortcodes-five-sixth {
		width: 100%;
		float: none;
		margin-left: 0;
		margin-bottom: 3em;
	}
	.wc-shortcodes-row > .wc-shortcodes-column:last-child {
		margin-bottom: 0;
	}
	body#wrap #page .wc-shortcodes-row {
		margin-top: 3em;
		margin-bottom: 3em;
	}
}

<?php // Navigation ?>
@media screen and (max-width: <?php echo $wpc2['responsive_menu_width']; ?>px) {
	.main-navigation .nav-container {
		position: relative;
	}
	.menu-toggle {
		display: block;
	}
	.main-navigation .menu,
	.menu-toggle {
		padding-left: 20px;
		padding-right: 20px;
	}
	#wrap .main-navigation a,
	#wrap .main-navigation a:hover,
	#wrap .main-navigation a:visited,
	#wrap .main-navigation a:focus,
	#wrap .main-navigation a:active {
		<?php echo wpcanvas2_css_set_color( 'color', 'dropdown_font_color'); ?>
		<?php echo wpcanvas2_css_set_color( 'background-color', 'dropdown_background_color'); ?>
	}
	#wrap .main-navigation li {
			padding-top: 0;
			padding-left: 0;
	}
	body .main-navigation a {
		padding-left: 0;
		padding-right: 0;
		white-space: normal;
	}
	body .main-navigation {
		text-align: left;
		background: none;
	}
	.main-navigation .menu {
		position: absolute;
		display: none;
		left: 0;
		right: 0;
		z-index: 999;
		margin-top: 1px;
		padding-top: 10px;
		padding-bottom: 90px;
		margin-bottom: 20px;
		box-shadow: 0px 0px 0px rgba(0,0,0,0);
		<?php echo wpcanvas2_css_set_color( 'background-color', 'dropdown_background_color'); ?>
	}
	.main-navigation.toggled .menu {
		display: block;
	}
	body .main-navigation ul a {
		padding-top: <?php echo $wpc2['dropdown_item_top_padding']; ?>px;
		padding-bottom: <?php echo $wpc2['dropdown_item_bottom_padding']; ?>px;
		width: auto;
	}
	body .main-navigation li {
		display: block;
	}
	#wrap .main-navigation li {
		border-width: 0;
	}
	#wrap .main-navigation li a {
		border-left-width: 0;
		border-bottom-width: 1px;
		border-bottom-style: solid;
		<?php echo wpcanvas2_css_set_color( 'border-color', 'menu_bar_border_color'); ?>
	}
	body .main-navigation ul ul {
		display: block;
		float: none;
		position: relative;
		z-index: auto;
		left: auto;
		top: auto;
		right: auto;
		bottom: auto;
		padding-left: 20px;
	}
}

<?php // Sidebar Widgets ?>
@media screen and (max-width: <?php echo $wpc2['sidebar_width'] + 20 + 20; ?>px) {
	body.display-sidebar .widget-area {
		width: 280px;
	}
}

<?php // Footer Widgets ?>
@media screen and (max-width: <?php echo $wpc2['footer_widget_width'] + 20 + 20; ?>px) {
	body .footer-widget-area .widget { 
		width: 280px;
	}
}
