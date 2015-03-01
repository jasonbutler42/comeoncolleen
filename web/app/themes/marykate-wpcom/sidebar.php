<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WPCanvas2
 */
?>
<?php if ( wpcanvas2_show_sidebar() ) : ?>

	<div id="secondary" class="widget-area" role="complementary">

		<div class="sidebar-background">

			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">

					<?php get_search_form(); ?>

				</aside>

				<aside id="archives" class="widget">

					<h1 class="widget-title"><?php _e( 'Archives', 'wpcanvas2' ); ?></h1>

					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>

				</aside>

				<aside id="meta" class="widget">

					<h1 class="widget-title"><?php _e( 'Meta', 'wpcanvas2' ); ?></h1>

					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>

				</aside>

			<?php endif; // end sidebar widget area ?>

		</div><!-- .sidebar-background -->

	</div><!-- #secondary -->

<?php endif; ?>
