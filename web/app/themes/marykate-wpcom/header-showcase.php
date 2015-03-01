<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WPCanvas2
 */

global $wpc2;

?><!DOCTYPE html>
<html id="master" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( $wpc2['responsive_enabled'] ) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php else : ?>
	<meta name="viewport" content="width=device-width">
<?php endif; ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( $wpc2['favicon'] ) : ?>
	<link href="<?php echo $wpc2['favicon']; ?>" rel="icon" type="image/x-icon" />
<?php endif; ?>


<?php wp_head(); ?>
</head>

<body id="wrap" <?php body_class(); ?>>

	<?php do_action( 'wpc_insert_code_top_of_page' ); ?>

	<div onclick="void(0)" class="top-background">

		<div class="bottom-background">

			<div id="page" class="hfeed site">

				<div class="header-container">

					<div class="site-boundary">

						<header id="masthead" class="site-header" role="banner">

							<?php do_action( 'wpc_insert_code_above_header' ); ?>

							<?php get_template_part( 'snippets/branding' ); ?>

							<?php do_action( 'wpc_insert_code_below_header' ); ?>

						</header><!-- #masthead -->

					</div><!-- .site-boundary -->

				</div>

				<div class="content-container">

					<div class="site-boundary">

						<div id="content" class="site-content">

							<?php do_action( 'wpc_insert_code_above_content' ); ?>

							<div class="encapsulate">
