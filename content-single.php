<?php
/**
 * @package Hood River
 */
?>
<?php
    $cats = get_the_category();
    $cat_name = $cats[0]-> name;
?>
<!-- content single -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content-single">

        <header class="entry-header dark-btm">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-meta">
                <//?php hood_river_posted_on(); ?>
            </div><!-- .entry-meta -->
            <div class="sharing">
                <span class='st_pinterest_custom' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                <span class='st_facebook_custom' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                <span class='st_twitter_custom' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                <span class='st_email_custom' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
            </div>
        </header><!-- .entry-header -->		<?php the_content(); ?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <span class="tag-list"><?php echo get_the_tag_list(' ',', ',' '); ?></span>
        <br>

		<//?php hood_river_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
