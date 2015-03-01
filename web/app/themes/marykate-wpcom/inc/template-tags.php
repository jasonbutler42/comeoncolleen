<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WPCanvas2
 */

if ( ! function_exists( 'wpcanvas2_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function wpcanvas2_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'wpcanvas2' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( 'Older posts', 'wpcanvas2' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts', 'wpcanvas2' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'wpcanvas2_pagination_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function wpcanvas2_pagination_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'wpcanvas2' ); ?></h1>
		<div class="nav-links">
			<?php 
				$big = 999999999; // need an unlikely integer
				$args = array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?page=%#%', // ?page=%#% : %#% is replaced by the page number
					'total' => $wp_query->max_num_pages,
					'current' => max( 1, get_query_var('paged') ),
					'show_all' => false,
					'prev_next' => true,
					'prev_text' => __('Previous Page', 'wpcanvas2'),
					'next_text' => __('Next Page', 'wpcanvas2'),
					'end_size' => 2,
					'mid_size' => 2,
					'type' => 'plain',
					'add_args' => false, // array of query args to add
					'add_fragment' => ''
				);
			?>
			<?php echo paginate_links( $args ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;


if ( ! function_exists( 'wpcanvas2_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function wpcanvas2_post_nav() {
	global $wpc2;

	if ( ! $wpc2['post_nav_show'] ) {
		return;
	}

	$post_type = get_post_type();
	if ( ! in_array( $post_type, array( 'post', 'attachment' ) ) ) {
		return;
	}

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'wpcanvas2' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '%title', 'Previous post link', 'wpcanvas2' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title', 'Next post link',     'wpcanvas2' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'wpcanvas2_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function wpcanvas2_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$date_format = get_option( 'date_format' );
	$date_format = str_replace( 'F j, Y', 'n / j / y', $date_format );

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date( $date_format ) ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date( $date_format ) )
	);

	printf( __( '<span class="posted-on">%1$s</span>', 'wpcanvas2' ),
		sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		)
	);
}
endif;

if ( ! function_exists( 'wpcanvas2_posted_on_2' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function wpcanvas2_posted_on_2() {
	global $wpc2;
	?>

	<?php if ( $wpc2['archive_meta_show'] ) : ?>
		<div class="archive-meta archive-top-meta">
			<?php

			$byline = sprintf(
				_x( 'by %s', 'post author', 'wpcanvas2' ),
				'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
			);

			echo '<span class="byline"> ' . $byline . '</span>';
			?>
			<span class="tag-links-title"><?php _e( 'in category ', 'wpcanvas2' ); ?></span>
			<span class="cat-links"><?php the_category(', '); ?></span>
		</div>
	<?php endif; ?>

	<?php
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function wpcanvas2_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'wpcanvas2_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'wpcanvas2_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so wpcanvas2_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so wpcanvas2_categorized_blog should return false.
		return false;
	}
}

if ( ! function_exists( 'wpcanvas2_share_buttons' ) ) :
function wpcanvas2_share_buttons() {
	$share_buttons = '';
	?>

	<?php if ( defined( 'WC_SHORTCODES_VERSION' ) ) : ?>
		<?php $share_buttons = do_shortcode( '[wc_share]' ); ?>
		<?php if ( ! empty( $share_buttons ) ) : ?>
			<div class="share-buttons">
				<span class="share-text"><?php echo __( 'Share', 'wpcanvas2' ); ?></span>
				<?php echo $share_buttons; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( empty( $share_buttons ) ) : ?>
		<?php
		if ( function_exists( 'sharing_display' ) ) {
			$share_buttons = sharing_display( '', false );
		}
		?>
		<?php if ( ! empty( $share_buttons ) ) : ?>
			<div class="share-buttons">
				<span class="share-text"><?php echo __( 'Share', 'wpcanvas2' ); ?></span>
				<?php echo $share_buttons; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php
}
endif;

if ( ! function_exists( 'wpcanvas2_social_icons' ) ) :
function wpcanvas2_social_icons() {
	?>

	<?php if ( defined( 'WC_SHORTCODES_VERSION' ) ) : ?>

		<?php $social_icons = do_shortcode( '[wc_social_icons align="left" size="medium"][/wc_social_icons]' ); ?>

		<?php if ( ! empty( $social_icons ) ) : ?>
			<?php echo $social_icons; ?>
		<?php endif; ?>

	<?php endif; ?>

	<?php
}
endif;

if ( ! function_exists( 'wpcanvas2_archive_meta' ) ) :
/**
 * Show Tags and Categories
 *
 */
function wpcanvas2_archive_meta() {
	global $wpc2;
?>
	<?php if ( $wpc2['archive_meta_show'] ) : ?>
		<?php
		$byline = sprintf(
			_x( 'By %s', 'post author', 'wpcanvas2' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
		?>

		<?php ob_start(); ?>
		<?php the_category(', '); ?>
		<?php 
		$cats = ob_get_clean();
		$cats = trim( $cats );
		?>

		<?php ob_start(); ?>
		<?php the_tags( '<span class="tag-links-title"> | '.__( 'Tags: ', 'wpcanvas2' ).'</span><span class="tag-links">', ', ', '</span>' ); ?>
		<?php 
		$tags = ob_get_clean();
		$tags = trim( $tags );
		?>

		<?php if ( ! empty( $cats ) || ! empty( $tags ) ) : ?>
			<div class="archive-meta archive-bottom-meta">

				<span class="byline"><?php echo $byline; ?></span>

				<?php if ( ! empty( $cats ) ) : ?>
					<span class="tag-links-title"> | <?php _e( 'Filed under ', 'wpcanvas2' ); ?></span>
					<span class="cat-links"><?php echo $cats; ?></span>
				<?php endif; ?>

				<?php if ( ! empty( $tags ) ) : ?>
					<?php echo $tags; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php
}
endif;

if ( ! function_exists( 'wpcanvas2_post_meta' ) ) :
/**
 * Show Post Meta
 *
 */
function wpcanvas2_post_meta() {
	if ( 'post' != get_post_type() ) {
		return;
	}
?>
	<?php ob_start(); ?>
	<?php if ( ! post_password_required() && ( comments_open() ) && ! is_single() ) : ?>
	<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'wpcanvas2' ), __( '1 Comment', 'wpcanvas2' ), __( '% Comments', 'wpcanvas2' ) ); ?></span>
	<?php endif; ?>

	<?php wpcanvas2_share_buttons(); ?>
	<?php 
	$html = ob_get_clean();
	$html = trim( $html );
	?>
	<?php if ( ! empty( $html ) ) : ?>
		<div class="post-meta clear">
			<?php echo $html; ?>
		</div>
	<?php endif; ?>
<?php
}
endif;

if ( ! function_exists( 'wpcanvas2_the_top_content' ) ) :
/**
 * Show Tags and Categories
 *
 */
function wpcanvas2_the_top_content() {
	global $more;    // Declare global $more (before the loop).
	$more = 0;       // Set (inside the loop) to display content above the more tag.

	$content = get_the_content( null, true );
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	$content = trim( $content );
	$search[] = '/\<p\>\s*\<a href=\S+ class=\"more-link\">\S+\<\/a\>\s*\<\/p\>/';
	$search[] = '/\s*\<a href=\S+ class=\"more-link\">\S+\<\/a\>\s*/';
	$replace[] = '';
	$replace[] = '';
	$content = preg_replace( $search, $replace, $content );
	$content = trim( $content );

	echo $content;
}
endif;

if ( ! function_exists( 'wpcanvas2_the_bottom_content' ) ) :
/**
 * Show Tags and Categories
 *
 */
function wpcanvas2_the_bottom_content() {
	$content = get_the_content( null, true );
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	$content = trim( $content );
	$search[] = '/\<p\>\s*\<span id="more-\d+"\>\<\/span\>\s*\<\/p\>/';
	$search[] = '/\s*\<span id="more-\d+"\>\<\/span\>\s*/';
	$replace[] = '';
	$replace[] = '';
	$content = preg_replace( $search, $replace, $content );
	$content = trim( $content );

	echo $content;
}
endif;

/**
 * Flush out the transients used in wpcanvas2_categorized_blog.
 */
function wpcanvas2_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'wpcanvas2_categories' );
}
add_action( 'edit_category', 'wpcanvas2_category_transient_flusher' );
add_action( 'save_post',     'wpcanvas2_category_transient_flusher' );
