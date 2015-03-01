<?php
/**
 * @package WPCanvas2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="clear">
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php wpcanvas2_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpcanvas2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( is_single() || is_home() ) : ?>
		<footer class="entry-footer">

			<?php wpcanvas2_archive_meta(); ?>

			<?php wpcanvas2_post_meta(); ?>

		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
