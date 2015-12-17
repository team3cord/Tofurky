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
        <?php echo do_shortcode("[fts_twitter twitter_name=@tofurky]"); ?>
    </div>
    <div class="fullline dark-btm"></div>
    <div class="side-email dark-btm">
        <span>keep in touch</span>
        <?php echo do_shortcode('[contact-form-7 id="79" title="Sidebar Email Signup"]');?>
        <ul>
            <li class="side-pin"><a href="http://www.pinterest.com/tofurky/" target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="591.2 91.3 19.2 19.2" style="enable-background:new 591.2 91.3 19.2 19.2;" xml:space="preserve"><style type="text/css"></style><path class="drk-svg-pin" d="M600.9,91.3c-5.3,0-9.6,4.4-9.6,9.7c0,4,2.3,7.4,5.8,8.9c0-0.7,0-1.5,0.2-2.3c0.2-0.8,1.2-5.3,1.2-5.3
	s-0.3-0.6-0.3-1.5c0-1.4,0.8-2.6,1.8-2.6c0.9,0,1.3,0.6,1.3,1.4c0,0.9-0.6,2.3-0.8,3.5c-0.2,1,0.5,1.8,1.5,1.8c1.8,0,3-2.4,3-5.2
	c0-2.2-1.4-3.7-4.1-3.7c-2.9,0-4.8,2.2-4.8,4.6c0,0.8,0.2,1.4,0.6,1.9c0.2,0.2,0.2,0.3,0.1,0.5c0,0.2-0.2,0.6-0.2,0.8
	c-0.1,0.2-0.3,0.3-0.5,0.2c-1.3-0.5-1.9-2-1.9-3.7c0-2.8,2.3-6,6.9-6c3.7,0,6.1,2.7,6.1,5.5c0,3.8-2.1,6.7-5.2,6.7
	c-1,0-2-0.6-2.3-1.2c0,0-0.6,2.3-0.7,2.7c-0.2,0.7-0.6,1.5-1,2c0.9,0.3,1.8,0.4,2.7,0.4c5.3,0,9.6-4.4,9.6-9.7
	C610.5,95.7,606.2,91.3,600.9,91.3"/></svg>
            </a></li>
        <!--<li class="side-inst"><a href="http://instagram.com/tofurky" target="_blank"></a></li>-->
            <li class="side-fb"><a href="https://www.facebook.com/TofurkyFan" target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="860.8 461.6 10.1 19.1" style="enable-background:new 860.8 461.6 10.1 19.1;" xml:space="preserve">
<style type="text/css"></style>
                        <path class="drk-svg-fb" d="M867.4,480.6H863V471h-2.2v-3.2h2.2v-2c0-2.7,1.2-4.3,4.8-4.3h2.9v3.3H869c-1.3,0-1.5,0.5-1.5,1.3v1.6h3.4
	l-0.3,3.3h-2.9v9.6H867.4L867.4,480.6L867.4,480.6z"/>
</svg>

                    </svg>
            </a></li>
            <li class="side-twt"><a href="https://twitter.com/@tofurky" target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="587.2 149.2 23.2 19.1" style="enable-background:new 587.2 149.2 23.2 19.1;" xml:space="preserve">
<style type="text/css"></style>
                        <path class="drk-svg-twt" d="M594.6,168.3c-2.7,0-5.3-0.7-7.4-2.2c0.4,0,0.7,0.1,1.1,0.1c2.2,0,4.3-0.7,5.9-2.1c-2.1,0-3.8-1.5-4.4-3.4
	c0.2,0,0.6,0.1,0.9,0.1c0.5,0,0.9,0,1.2-0.1c-2.2-0.5-3.8-2.4-3.8-4.7l0,0c0.6,0.4,1.3,0.6,2.2,0.6c-1.2-0.9-2.1-2.4-2.1-4
	c0-0.9,0.2-1.7,0.6-2.5c2.3,3,5.9,4.9,9.8,5.1c-0.1-0.4-0.1-0.7-0.1-1.1c0-2.7,2.1-4.9,4.8-4.9c1.3,0,2.6,0.6,3.4,1.5
	c1.1-0.2,2.1-0.6,3.1-1.1c-0.4,1.1-1.1,2.1-2.1,2.7c1-0.1,1.8-0.4,2.7-0.7c-0.6,1-1.5,1.9-2.3,2.5c0,0.2,0,0.4,0,0.6
	C608.2,160.8,603.3,168.3,594.6,168.3"/>
</svg>
            </a></li>
            <li class="side-inst"><a href="https://instagram.com/the_tofurky_company/" target="_blank">
                    <svg version="1.1" id="Isolation_Mode" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                         y="0px" viewBox="591.2 80.4 19.2 19.1" style="enable-background:new 591.2 80.4 19.2 19.1;" xml:space="preserve">
<style type="text/css">
</style>
                        <path class="drk-svg-inst" d="M608.2,88.5h-1.7c0.1,0.5,0.2,1,0.2,1.5c0,3.2-2.6,5.8-5.9,5.8S595,93.2,595,90c0-0.5,0.1-1,0.2-1.5h-1.7v8.1
	c0,0.4,0.3,0.7,0.7,0.7h13.3c0.4,0,0.7-0.3,0.7-0.7V88.5L608.2,88.5z M608.2,83.4c0-0.4-0.3-0.7-0.7-0.7h-2.2
	c-0.4,0-0.7,0.3-0.7,0.7v2.2c0,0.4,0.3,0.7,0.7,0.7h2.2c0.4,0,0.7-0.3,0.7-0.7V83.4z M600.8,86.3c-2,0-3.7,1.6-3.7,3.7
	c0,2,1.6,3.7,3.7,3.7c2,0,3.7-1.6,3.7-3.7C604.4,88,602.8,86.3,600.8,86.3 M608.2,99.6h-14.7c-1.2,0-2.2-1-2.2-2.2V82.7
	c0-1.2,1-2.2,2.2-2.2h14.7c1.2,0,2.2,1,2.2,2.2v14.7C610.4,98.6,609.4,99.6,608.2,99.6"/>
</svg>
            </a></li>
            <li class="side-rss"><a href="http://blog.tofurky.com/rss" target="_blank">
                    <svg version="1.1" id="feed_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="499.2 181.3 19 19.3" style="enable-background:new 499.2 181.3 19 19.3;" xml:space="preserve">
<style type="text/css">
</style>
                        <g class="hv-rss">
                            <ellipse class="drk-svg-rss" cx="501.8" cy="198" rx="2.5" ry="2.5"/>
                            <path class="drk-svg-rss" d="M499.2,191.6c2.4,0,4.6,0.9,6.3,2.6s2.6,4,2.6,6.4h3.6c0-7-5.6-12.7-12.6-12.7V191.6z"/>
                            <path class="drk-svg-rss" d="M499.2,185c8.5,0,15.4,7,15.4,15.6h3.6c0-10.7-8.6-19.3-19-19.3V185z"/>
                        </g>
</svg>
            </a></li>
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


