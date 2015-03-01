<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WPCanvas2
 */
global $wpc2;
?>

							</div><!-- .encapsulate -->

							<?php do_action( 'wpc_insert_code_below_content' ); ?>

						</div><!-- #content -->

					</div><!-- .site-boundary -->

				</div><!-- .content-container -->

				<div class="footer-container">

					<div class="site-boundary">

						<footer id="colophon" class="site-footer" role="contentinfo">
							<?php get_sidebar('footer'); ?>
						</footer><!-- #colophon -->

						<footer class="site-info clear">
							<div class="site-copyright">
								<?php wpcanvas2_copyright(); ?>
							</div>
							<div class="site-info-brand">
								<?php wpcanvas2_brand(); ?>
							</div>
						</footer><!-- .site-info -->	

					</div><!-- .site-boundary -->

				</div><!-- .site-info-container -->

			</div><!-- #page -->

		</div><!-- .bottom-background -->

	</div><!-- .top-background -->

	<?php wp_footer(); ?>

</body>
</html>
