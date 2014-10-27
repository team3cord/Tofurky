<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Hood River
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'hood-river' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <div class="site-branding">
                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            </div>
        </a>

		<nav id="site-navigation" class="main-navigation" role="navigation">

            <span class="filter-text">filtered by:</span>
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'hood-river' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div class="search-box-mc"><?php get_search_form('searchform'); ?></div>
                <div class="search-box-btn"><a id="mc-search" href="#"></a></div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
