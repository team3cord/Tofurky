<?php
/**
 * The template for displaying search results pages.
 *
 * @package Hood River
 */

get_header(); ?>

<!-- search -->
	<section id="search-primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<!-- <header class="page-header">
				<h1 class="page-title"><//?php printf( __( 'Search Results for: %s', 'hood-river' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'masonry' );  //or search???
				?>

			<?php endwhile; ?>

			<?php hood_river_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<//?php get_sidebar(); ?>
<?php get_footer(); ?>
