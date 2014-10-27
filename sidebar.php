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
    <div class="side-email">
        <span>keep in touch</span>
        <?php echo do_shortcode('[contact-form-7 id="79" title="Sidebar Email Signup"]');?>
        <ul>
            <li class="side-pin"><a href="http://www.pinterest.com/tofurky/" target="_blank"></a></li>
            <li class="side-inst"><a href="http://instagram.com/tofurky" target="_blank"></a></li>
            <li class="side-fb"><a href="https://www.facebook.com/TofurkyFan" target="_blank"></a></li>
            <li class="side-twt"><a href="https://twitter.com/@tofurky" target="_blank"></a></li>
            <li class="side-rss"><a href="#" target="_blank"></a></li>
        </ul>
    </div>
    <div class="most-recent">
        <?php global $post;
        $categories = get_the_category();
        foreach ($categories as $category) :
        ?>
            <?php
            $posts = get_posts('numberposts=2&category='. $category->term_id);
            foreach($posts as $post) :
                ?>
                <div class="side-recent-post">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                        <h5><?php the_title(); ?></h5>
                    </a>
                     <span class="comment-num"><?php echo comments_number(); ?></span>
                     <span class="tag-list"> <?php echo get_the_tag_list(' ',', ',' '); ?></span>

                </div>
            <?php endforeach; ?>

            <?php endforeach; ?>
    </div>
</div><!-- #secondary -->
