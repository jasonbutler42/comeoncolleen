<?php global $wpc2; ?>
.site-boundary {
	width: <?php echo $wpc2['full_content_border_width']; ?>px;
}
.site-padding,
.site-header,
.main-navigation .menu,
.site-content,
.footer-widget-area,
.site-info {
	padding-left: <?php echo $wpc2['edge_padding']; ?>px;
	padding-right: <?php echo $wpc2['edge_padding']; ?>px;
}
.display-sidebar .content-area {
	width: <?php echo $wpc2['content_width']; ?>px;
}
.display-sidebar .widget-area {
	width: <?php echo $wpc2['sidebar_width']; ?>px;
}
