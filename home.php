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
        <main id="main" class="site-main" role="main">
            <div id="masonry-loop">
                            <article class="masonry-entry featured-two" id="post-f2">
                                    <div class="masonry-thumbnail">
                                        <div class="post-cat-icon <?php get_category('name'); ?>"></div>
                                        <a href=""> <img  class="attachment-masonry-thumb wp-post-image" src="<?php echo get_template_directory_uri(); ?>/imgs/second-featured-fpo.jpg"></a>
                                    </div><!--.masonry-thumbnail-->
                                <div class="masonry-details">
                                    <h5><a href="#" title=""><span class="masonry-post-title">This is just a test title</span></a></h5>
                                    <div class="masonry-post-excerpt">
                                        <?//php the_excerpt(); ?>
                                    </div><!--.masonry-post-excerpt-->
                                </div><!--/.masonry-entry-details -->
                            </article><!--/.masonry-entry-->


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