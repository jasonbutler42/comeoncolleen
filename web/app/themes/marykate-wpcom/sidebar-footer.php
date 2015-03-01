<?php
/**
 * The footer sidebar containing the main widget areas.
 *
 * @package WPCanvas2
 */
?>
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>

				<div id="tertiary" class="footer-widget-area clear" role="complementary">

					<div class="masonry-sort">

						<?php dynamic_sidebar( 'footer-1' ); ?>

					</div><!-- .masonry-sort -->

				</div><!-- #secondary -->

			<?php endif; ?>
