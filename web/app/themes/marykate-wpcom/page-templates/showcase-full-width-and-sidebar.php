<?php
/**
 * Template Name: No Menu - Full Width + Sidebar
 *
 * @package WPCanvas2
 */
get_header( 'showcase' ); ?>

	<div id="content-header" class="content-area content-area-full-width content-area-top encapsulate">
		<main id="content-header-main" class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'top' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="primary" class="content-area content-area-bottom">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'bottom' ); ?>

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
