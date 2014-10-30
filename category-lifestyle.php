<?php get_header();?>
<!-- cat lifestyle -->

<div id="cat-primary" class="content-area">

    <main id="main" class="site-main" role="main">
        <div id="masonry-loop" class="isotope">



            <?php if ( have_posts() ) : ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'content', 'masonry' );
                ?>

            <?php endwhile; ?>

        </div><!-- masonry loop -->
        <?php hood_river_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();?>
