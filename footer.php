<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Hood River
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <span class="footer-label"><?php echo get_field('footer_label',5); ?></span>
        <div class="footer-contact"> <?php echo get_field('footer_contact_form',5); ?></div>
        <span class="footer-privacy"><?php echo get_field('footer_privacy',5); ?></span>
        <div class="footer-social">
            <ul>
                <li><a class="pin-wt" href="http://www.pinterest.com/tofurky/" target="_blank"></a></li>
                <li><a class="inst-wt" href="http://instagram.com/tofurky" target="_blank"></a></li>
                <li><a class="fb-wt" href="https://www.facebook.com/TofurkyFan" target="_blank"></a></li>
                <li><a class="twt-wt" href="https://twitter.com/@tofurky" target="_blank"></a></li>
                <li><a class="rss-wt" href="#"></a></li>
            </ul>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    jQuery(function($){
        $(document).ready(function(){
    //set the container that Masonry will be inside of in a var
    var container = document.querySelector('#masonry-loop');
    //create empty var msnry
    var msnry;
    // initialize Masonry after all images have loaded
    imagesLoaded( container, function() {
        msnry = new Masonry( container, {
            columnWidth: 500,
            itemSelector: '.masonry-entry'
        });
    });
            function featuredImage(feature){
                $(feature).eq(0).addClass('featured-one');
                $(feature).eq(1).addClass('featured-two');
                $(feature).eq(2).addClass('featured-three');
            }
            featuredImage('.sticky');
        })
});
</script>

</body>
</html>
