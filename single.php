<?php
/**
 * The template for displaying all single posts.
 *
 * @package Hood River
 */

get_header(); ?>

<!-- single -->
    <div class="sticky-buffer"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<//?php hood_river_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<script>
    jQuery(function($){
        var primaryHeight   = $('#primary'),
            secondaryHeight = $('#secondary');
        console.log(primaryHeight + 'pri');
        console.log(secondaryHeight + 'sec');
        if (primaryHeight.height() >= secondaryHeight.height()){
            primaryHeight.addClass('dark-rt');
        } else {
            secondaryHeight.addClass('dark-lft');
        }
    });
</script>
<?php get_footer(); ?>
