<?php
/**
 * The template for displaying header logo.
 */
global $wpc2;
?>
<div class="site-branding">
	<?php if ( $wpc2['logo_image'] ) : ?>
	<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $wpc2['logo_image']; ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" /></a></h1>
	<?php endif; ?>
	<?php if ( $wpc2['show_title'] ) : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php endif; ?>
	<?php if ( $wpc2['show_description'] ) : ?>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	<?php endif; ?>

	<?php if ( $wpc2['header_show_social_icons'] ) : ?>
		<?php wpcanvas2_social_icons(); ?>
	<?php endif; ?>
</div>
