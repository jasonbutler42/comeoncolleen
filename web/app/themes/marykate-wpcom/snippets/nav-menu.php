<?php
/**
 * The template for displaying main navigation.
 */
?>
<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="nav-container clear">
		<div class="nav-bottom-border clear">
			<div class="site-boundary">

				<h1 class="menu-toggle"><?php _e( 'Menu', 'wpcanvas2' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wpcanvas2' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
		</div>
	</div>
</nav><!-- #site-navigation -->
