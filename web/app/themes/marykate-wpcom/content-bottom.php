<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WPCanvas2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content entry-bottom-content">
		<?php wpcanvas2_the_bottom_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpcanvas2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
