<?php global $wpc2; ?>
<?php // body background ?>
body { 
	<?php echo wpcanvas2_css_set_background_image( 'body_background_image'); ?>
	background-repeat: <?php echo $wpc2['body_background_repeat']; ?>;
	background-position: <?php echo $wpc2['body_background_position']; ?>;
	background-attachment: <?php echo $wpc2['body_background_attachment']; ?>;
	<?php echo wpcanvas2_css_set_color( 'background-color', 'body_background_color'); ?>
}
<?php // body font ?>
body,
button,
input,
select,
textarea {
	<?php echo wpcanvas2_css_set_font_family( 'body_font_family', 'body_font_smoothing' ); ?>
	font-size: <?php echo $wpc2['body_font_size']; ?>px;
	font-style: <?php echo $wpc2['body_font_style']; ?>;
	font-weight: <?php echo $wpc2['body_font_weight']; ?>;
	text-transform: <?php echo $wpc2['body_font_text_transform']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'body_font_color'); ?>
}
caption {
	font-size: <?php echo $wpc2['body_font_size_large']; ?>px;
}
body {
	line-height: <?php echo $wpc2['body_font_line_height']; ?>;
}
th, dt,
b, strong {
	font-weight: <?php echo $wpc2['body_font_bold_weight']; ?>;
}
caption {
	font-weight: <?php echo $wpc2['body_font_weight']; ?>;
}
.no-comments,
.comment-navigation {
	font-size: <?php echo $wpc2['body_font_size_xlarge']; ?>px;
}
.entry-caption,
.archive-meta,
.wp-caption-text,
.comment-metadata {
	font-size: <?php echo $wpc2['body_font_size_small']; ?>px;
}
pre, code, kbd, tt, var {
	font-size: <?php echo $wpc2['code_font_size']; ?>px;
}
<?php // elements ?>
hr {
	<?php echo wpcanvas2_css_set_color( 'background-color', 'border_color'); ?>
}
<?php // links ?>
a,
a:visited,
a:focus,
a:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_link_font_color'); ?>
}
a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_link_font_hover_color'); ?>
}
<?php // title ?>
.blog .page-title, 
.archive .page-title,
.search .page-title {
	<?php echo wpcanvas2_css_set_font_family( 'page_title_font_family', 'page_title_font_smoothing' ); ?>
	font-size: <?php echo $wpc2['page_title_font_size']; ?>px;
	font-style: <?php echo $wpc2['page_title_font_style']; ?>;
	font-weight: <?php echo $wpc2['page_title_font_weight']; ?>;
	text-transform: <?php echo $wpc2['page_title_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['page_title_font_line_height']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'page_title_font_color'); ?>
}
<?php // heading ?>
h1,
h2,
h3 {
	<?php echo wpcanvas2_css_set_font_family( 'heading_font_family', 'heading_font_smoothing' ); ?>
	font-style: <?php echo $wpc2['heading_font_style']; ?>;
	font-weight: <?php echo $wpc2['heading_font_weight']; ?>;
	text-transform: <?php echo $wpc2['heading_font_text_transform']; ?>;
	line-height: <?php echo $wpc2['heading_font_line_height']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'heading_font_color'); ?>
}
h1 strong, h1 b,
h2 strong, h2 b,
h3 strong, h3 b {
	font-weight: <?php echo $wpc2['heading_font_bold_weight']; ?>;
}
h1 a, h2 a, h3 a,
h1 a:visited, h2 a:visited, h3 a:visited,
h1 a:focus, h2 a:focus, h3 a:focus,
h1 a:active, h2 a:active, h3 a:active {
	<?php echo wpcanvas2_css_set_color( 'color', 'heading_link_font_color'); ?>
}
h1 a:hover, h2 a:hover, h3 a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'heading_link_font_hover_color'); ?>
}

h4,
h4 strong,
h4 b,
h4 a,
h4 a:visited,
h4 a:focus,
h4 a:active {
	<?php echo wpcanvas2_css_set_font_family( 'body_font_family', 'body_font_smoothing' ); ?>
	font-style: <?php echo $wpc2['heading_h4_font_style']; ?>;
	font-weight: <?php echo $wpc2['heading_h4_font_weight']; ?>;
	text-transform: <?php echo $wpc2['heading_h4_font_text_transform']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'heading_h4_font_color'); ?>
}

h5, h6,
h5 strong, h6 strong,
h5 b, h6 b,
h5 a, h6 a,
h5 a:visited, h6 a:visited,
h5 a:focus, h6 a:focus,
h5 a:active, h6 a:active {
	<?php echo wpcanvas2_css_set_font_family( 'body_font_family', 'body_font_smoothing' ); ?>
	font-style: <?php echo $wpc2['body_font_style']; ?>;
	font-weight: <?php echo $wpc2['body_font_bold_weight']; ?>;
	text-transform: <?php echo $wpc2['body_font_text_transform']; ?>;
	<?php echo wpcanvas2_css_set_color( 'color', 'body_font_color'); ?>
}

h4 a:hover, h5 a:hover, h6 a:hover {
	<?php echo wpcanvas2_css_set_color( 'color', 'body_link_font_hover_color'); ?>
}

h1 {
	font-size: <?php echo $wpc2['heading_font_size_h1']; ?>px;
}
h2 {
	font-size: <?php echo $wpc2['heading_font_size_h2']; ?>px;
}
h3 {
	font-size: <?php echo $wpc2['heading_font_size_h3']; ?>px;
}
h4 {
	font-size: <?php echo $wpc2['heading_font_size_h4']; ?>px;
}
h5 {
	font-size: <?php echo $wpc2['heading_font_size_h5']; ?>px;
}
h6 {
	font-size: <?php echo $wpc2['heading_font_size_h6']; ?>px;
}
<?php // forms ?>
select,
input,
textarea {
	<?php echo wpcanvas2_css_set_color( 'color', 'form_font_color'); ?>
	<?php echo wpcanvas2_css_set_color( 'border-color', 'form_border_color'); ?>
}
select:focus,
input:focus,
textarea:focus {
	<?php echo wpcanvas2_css_set_color( 'border-color', 'form_border_focus_color'); ?>
}
