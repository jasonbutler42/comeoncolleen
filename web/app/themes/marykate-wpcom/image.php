<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WPCanvas2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
							<?php $image = null; ?>
							<?php wpcanvas2_the_attached_image( $image ); ?>
						</div><!-- .attachment -->

						<?php if ( has_excerpt() ) : ?>
						<div class="entry-caption" style="width:<?php echo $image['width']; ?>px">
							<?php the_excerpt(); ?>
						</div><!-- .entry-caption -->
						<?php endif; ?>
					</div><!-- .entry-attachment -->

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

						<?php wpcanvas2_post_meta(); ?>

					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-## -->

			<?php wpcanvas2_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
