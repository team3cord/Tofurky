<?php
/**
 * Template Name: Home Page
 * @package Hood River
 */

get_header(); ?>

    <!-- home  -->

    <div id="home-primary" class="content-area">
        <div class="featured-one">
            <a href="<?php echo get_field('main_featured_link', 5); ?>">
                <img src="<?php echo get_field('main_featured_image',5);?>">
                <div class="featured-callout">
                    <span><?php echo get_field('main_featured_callout', 5); ?></span>
                </div>
                <div class="featured-title">
                    <span><?php echo get_field('main_featured_post_title', 5); ?></span>
                </div>
            </a>
        </div>
        <div class="featured-two">
            <a href="<?php echo get_field('two_featured_link', 5); ?>">
                <img src="<?php echo get_field('two_featured_image',5);?>">
                <div class="featured-callout">
                    <span><?php echo get_field('two_featured_callout', 5); ?></span>
                </div>
                <div class="featured-title">
                    <span><?php echo get_field('two_featured_post_title', 5); ?></span>
                </div>
            </a>
        </div>
        <div class="featured-three">
            <a href="<?php echo get_field('three_featured_link', 5); ?>">
                <img src="<?php echo get_field('three_featured_image',5);?>">
                <div class="featured-callout">
                    <span><?php echo get_field('three_featured_callout', 5); ?></span>
                </div>
                <div class="featured-title">
                    <span><?php echo get_field('three_featured_post_title', 5); ?></span>
                </div>
            </a>
        </div>
        <div class="clear-mc"></div>
        <main id="main" class="site-main" role="main">
            <div id="masonry-loop">



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

<?php get_footer(); ?>