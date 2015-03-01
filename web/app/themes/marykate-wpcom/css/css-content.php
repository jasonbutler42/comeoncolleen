<?php global $wpc2; ?>
.site-content { 
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_background_color'); ?>
	padding-top: <?php echo $wpc2['content_top_padding']; ?>px;
	padding-bottom: <?php echo $wpc2['content_top_padding']; ?>px;
}
.entry-meta,
.entry-meta a,
.entry-meta a:visited,
.entry-meta a:focus,
.entry-meta a:hover,
.entry-meta a:active {
	<?php echo wpcanvas2_css_set_font_family( 'date_font_family', 'date_font_smoothing' ); ?>
	font-size: <?php echo $wpc2['date_font_size']; ?>px;
	font-style: <?php echo $wpc2['date_font_style']; ?>;
	font-weight: <?php echo $wpc2['date_font_weight']; ?>;
	text-transform: <?php echo $wpc2['date_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['date_font_line_height']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'date_font_color'); ?>
}
.entry-meta b,
.entry-meta strong {
	font-weight: <?php echo $wpc2['date_font_weight']; ?>;
}
blockquote {
	<?php echo wpcanvas2_css_set_font_family( 'quote_font_family', 'quote_font_smoothing' ); ?>
	font-size: <?php echo $wpc2['quote_font_size']; ?>px;
	font-style: <?php echo $wpc2['quote_font_style']; ?>;
	font-weight: <?php echo $wpc2['quote_font_weight']; ?>;
	text-transform: <?php echo $wpc2['quote_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['quote_font_line_height']; ?>;
	<?php echo wpcanvas2_css_set_color( 'background-color', 'content_accent_color' ); ?>
	<?php echo wpcanvas2_css_set_color( 'border-left-color', 'content_accent_color', -15 ); ?>
}
blockquote b,
blockquote strong {
	font-weight: <?php echo $wpc2['quote_font_weight']; ?>;
}
.post-meta,
.post-meta a,
.post-meta a:visited,
.post-meta a:focus,
.post-meta a:active {
	<?php echo wpcanvas2_css_set_font_family( 'post_meta_font_family', 'post_meta_font_smoothing' ); ?>
	font-size: <?php echo $wpc2['post_meta_font_size']; ?>px;
	font-style: <?php echo $wpc2['post_meta_font_style']; ?>;
	font-weight: <?php echo $wpc2['post_meta_font_weight']; ?>;
	text-transform: <?php echo $wpc2['post_meta_font_text_transform']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'post_meta_font_color'); ?>
	text-decoration: none;
}
.post-meta a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'post_meta_font_hover_color'); ?>
}
.post-meta b,
.post-meta strong {
	font-weight: <?php echo $wpc2['post_meta_font_weight']; ?>;
}
body .wc-shortcodes-share-buttons li a img {
	max-height: <?php echo $wpc2['post_meta_font_size']; ?>px;
}
.author-info,
.site-main > .hentry,
.search .wpc2-post,
.blog .hentry,
.archive .hentry {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'border_color'); ?>
}
#wrap .entry-caption,
#wrap .wp-caption-text {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'caption_font_background_color'); ?>
}
#wrap .wpc2-thumbnail-grid .gallery-caption {
	<?php echo wpcanvas2_css_set_rgba_color( 'background-color', 'caption_font_background_color', $wpc2['caption_font_background_opacity'] ); ?>
}
#wrap .entry-caption,
#wrap .entry-caption *,
#wrap .wp-caption-text,
#wrap .wp-caption-text * {
	<?php echo wpcanvas2_css_set_color( 'color', 'caption_font_color'); ?>
}
#wrap .wp-caption-text a,
#wrap .wp-caption-text a:hover,
#wrap .wp-caption-text a:active,
#wrap .wp-caption-text a:focus,
#wrap .wp-caption-text a:visited {
	<?php echo wpcanvas2_css_set_color( 'color', 'caption_link_font_color'); ?>
}
#wrap .comment-body {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'comment_background_color'); ?>
}
#wrap .comment-body:before {
	<?php echo wpcanvas2_css_set_color( 'border-right-color', 'comment_background_color'); ?>
}
#wrap .comment-metadata a {
	<?php echo wpcanvas2_css_set_color( 'color', 'comment_background_color', -25 ); ?>
}
#wrap .comment-metadata a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'comment_background_color', -35 ); ?>
}
#wrap .archive-meta,
#wrap .archive-meta a,
#wrap .archive-meta a:active,
#wrap .archive-meta a:focus,
#wrap .archive-meta a:visited {
	<?php //echo wpcanvas2_css_set_color( 'color', 'archive_meta_font_color' ); ?>
}
#wrap .archive-meta a:hover {
	<?php //echo wpcanvas2_css_set_color( 'color', 'archive_meta_font_hover_color' ); ?>
}
