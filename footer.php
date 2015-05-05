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
                <!--<li><a class="inst-wt" href="http://instagram.com/tofurky" target="_blank"></a></li>-->
                <li><a class="fb-wt" href="https://www.facebook.com/TofurkyFan" target="_blank"></a></li>
                <li><a class="twt-wt" href="https://twitter.com/@tofurky" target="_blank"></a></li>
                <li><a class="rss-wt" href="http://blog.tofurky.com/rss"></a></li>
            </ul>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    jQuery(function($){
            // initialize Isotope after all images have loaded
            var wWidth = $(window).width();
            var colWidth = (wWidth / 3);
            console.log(wWidth);
            console.log(colWidth);
            var afterLoad = function(){
               var bricks = $('article.item');
                bricks.each(function( index, obj){
                    if ($(this).css('left') === '0px'){
                        $(this).addClass('clear-dots');
                    }
                });
//            console.log($('article.item'));
               // $('#post-56').css('border-width', '0');
        };
            $('.isotope').imagesLoaded( function() {
                var $container = $('.isotope').isotope({
                    itemSelector: '.item',
                    masonry: {
                        columnWidth: colWidth
                    }
                });
                $container.isotope('on', 'arrangeComplete', afterLoad());
            });
        $(window).resize(function(){

            // initialize Isotope after all images have loaded
            var wWidth = $(window).width();
            var colWidth = (wWidth / 3);
            if (wWidth >= 765){
                $('.main-navigation').addClass('showme'); // Resizing browser from mobile nav
            } else {
                $('header.site-header').removeClass('sticky');
            }
            console.log(wWidth);
            console.log(colWidth);
            $('.isotope').imagesLoaded( function() {
                $('.isotope').isotope({
                    itemSelector: '.item',
                    masonry: {
                        columnWidth: colWidth
                    }
                })
            })
        })
    });




</script>

</body>
</html>
