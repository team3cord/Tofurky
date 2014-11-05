<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hood River
 */

get_header(); ?>

<!-- archive -->
	<section id="archive-primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"> You selected : <?php single_tag_title(); ?>
                    <//?php
						if ( is_category() ) :
                            single_tag_title();



						else :
							_e( 'Tags Archives', 'hood-river' );

						endif;
					?>
				</h1>
                <div id="masonry-loop" class="isotope">
			<!--	<//?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?> -->
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'masonry');
				?>

			<?php endwhile; ?>

            </div><!-- masonry loop -->
			<?php hood_river_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<//?php get_sidebar(); ?>
<?php get_footer(); ?>
