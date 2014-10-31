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
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<//?php hood_river_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content-single">
        <div class="masonry-thumbnail">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php  echo $cat_name ?>"><div class="post-cat-icon <?php  echo $cat_name ?>"></div></a>
            <?php the_post_thumbnail('masonry-thumb'); ?>
        </div><!--.masonry-thumbnail-->
		<?php the_content(); ?>


		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hood-river' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <span class="tag-list"><?php echo get_the_tag_list(' ',', ',' '); ?></span>
        <br>

		<//?php hood_river_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
