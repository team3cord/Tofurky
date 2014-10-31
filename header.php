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
<meta name="viewport" content="width=device-width, initial-scale=1"><!--
/**
 * @license
 * MyFonts Webfont Build ID 2912957, 2014-10-30T19:04:53-0400
 *
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are
 * explicitly restricted from using the Licensed Webfonts(s).
 *
 * You may obtain a valid license at the URLs below.
 *
 * Webfont: MuseoSlab-300 by exljbris
 * URL: http://www.myfonts.com/fonts/exljbris/museo-slab/300/
 * Copyright: Copyright (c) 2009 by Jos Buivenga. All rights reserved.
 * Licensed pageviews: 500,000
 *
 * Webfont: MuseoSlab-300Italic by exljbris
 * URL: http://www.myfonts.com/fonts/exljbris/museo-slab/300-italic/
 * Copyright: Copyright (c) 2009 by Jos Buivenga. All rights reserved.
 * Licensed pageviews: 500,000
 *
 * Webfont: MuseoSlab-100Italic by exljbris
 * URL: http://www.myfonts.com/fonts/exljbris/museo-slab/100-italic/
 * Copyright: Copyright (c) 2009 by Jos Buivenga. All rights reserved.
 * Licensed pageviews: 500,000
 *
 * Webfont: ProximaNova-LightIt by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/light-it/
 * Copyright: Copyright (c) Mark Simonson, 2005. All rights reserved.
 * Licensed pageviews: 1,000,000
 *
 * Webfont: ProximaNova-Light by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/light/
 * Copyright: Copyright (c) Mark Simonson, 2005. All rights reserved.
 * Licensed pageviews: 1,000,000
 *
 * Webfont: ProximaNova-Regular by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/regular/
 * Copyright: Copyright (c) Mark Simonson, 2005. All rights reserved.
 * Licensed pageviews: 1,000,000
 *
 * Webfont: ProximaNova-Bold by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/bold/
 * Copyright: Copyright (c) Mark Simonson, 2005. All rights reserved.
 * Licensed pageviews: 1,000,000
 *
 *
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=2912957
 *
 * © 2014 MyFonts Inc
*/

-->

    <!-- 1. load the webfonts -->

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/hood-river/blogtofurky.css"/>

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

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div class="search-box-mc"><?php get_search_form('searchform'); ?></div>
                <div class="search-box-btn"><a id="mc-search" href="#"></a></div>

        </nav><!-- #site-navigation -->
        <div class="menu-toggle"><a id="mobile-men" href="#"> <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/hood-river/imgs/hamburger.jpg"></a></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
