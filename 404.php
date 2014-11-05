<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Hood River
 */

get_header(); ?>

	<div id="primary-four" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Page Not Available. Vestibulum id ligula porta felis euismod semper.</h1>
				</header><!-- .page-header -->

				<div class="page-content show-search">


					<?php get_search_form('searchform'); ?>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
