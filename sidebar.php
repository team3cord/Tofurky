<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Hood River
 */


?>

<div id="secondary" class="widget-area" role="complementary">

        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <div class="social-feed">
        <?php echo do_shortcode("[fts twitter twitter_name=@tofurky]"); ?>
    </div>
    <div class="fullline dark-btm"></div>
    <div class="side-email dark-btm">
        <span>keep in touch</span>
        <?php echo do_shortcode('[contact-form-7 id="79" title="Sidebar Email Signup"]');?>
        <ul>
            <li class="side-pin"><a href="http://www.pinterest.com/tofurky/" target="_blank"></a></li>
        <!--<li class="side-inst"><a href="http://instagram.com/tofurky" target="_blank"></a></li>-->
            <li class="side-fb"><a href="https://www.facebook.com/TofurkyFan" target="_blank"></a></li>
            <li class="side-twt"><a href="https://twitter.com/@tofurky" target="_blank"></a></li>
            <li class="side-inst"><a href="https://instagram.com/the_tofurky_company/" target="_blank"></a></li>
            <li class="side-rss"><a href="http://blog.tofurky.com/rss" target="_blank"></a></li>
        </ul>
    </div>
    <div class="most-recent">
        <?php
        if ( is_single() ) {
            $cats = wp_get_post_categories($post->ID);
            if ($cats) {
                $first_cat = $cats[0];
                $args=array(
                    'cat' => $first_cat, //cat__not_in wouldn't work
                    'post__not_in' => array($post->ID),
                    'showposts'=>2,
                    'caller_get_posts'=>1
                );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <div class="side-recent-post dark-btm">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <h5><?php the_title(); ?></h5>
                            </a>
                            <div class="com-tag">
                              <span class="comment-num"><?php echo comments_number(); ?></span>
                              <span class="tag-list"> <?php echo get_the_tag_list(' ',', ',' '); ?></span>
                            </div>

                </div>



                    <?php
                    endwhile;
                } //if ($my_query)
            } //if ($cats)
            wp_reset_query();  // Restore global post data stomped by the_post().
        } //if (is_single())
        ?>

   </div>
</div><!-- #secondary -->


