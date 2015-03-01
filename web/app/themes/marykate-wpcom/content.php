<?php
/**
 * @package WPCanvas2
 */
?>
<?php 
$show_post_meta = false;
$class = 'hide-post-meta';
if ( ! is_search() && 'post' == get_post_type() ) {
	$show_post_meta = true;
	$class = 'show-post-meta';
}
if ( $show_excerpt = wpcanvas2_show_excerpt() ) {
	$class .= ' show-excerpt';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class . ' wpc2-post' ); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php wpcanvas2_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( $show_excerpt ) : // Only display Excerpts on condition ?>
		<div class="entry-summary clear">

			<?php $offset = 0; ?>
			<?php $class = ''; ?>
			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>">
					<?php $post_thumbnail = get_the_post_thumbnail( null, 'post-thumbnail' ); ?>
					<?php echo $post_thumbnail; ?>

					<?php
					if ( preg_match( '/width=["\']([0-9]+)/', $post_thumbnail, $matches ) ) {
						$offset = intval( $matches[1] );
						$class = ' has-post-thumbnail';
					}
					?>
					</a>
				</div>
			<?php endif; ?>

			<div class="entry-excerpt<?php echo $class; ?>" style="padding-left:<?php echo $offset; ?>px;">
				<?php the_excerpt(); ?>
			</div>

		</div><!-- .entry-summary -->
	<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Read More', 'wpcanvas2' ) ); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'wpcanvas2' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<?php if ( $show_post_meta ) : ?>
		<footer class="entry-footer">

			<?php wpcanvas2_post_meta(); ?>

		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
