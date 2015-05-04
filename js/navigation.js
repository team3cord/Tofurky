/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */

jQuery(function($){
    $(document).ready(function(){
        var searchBox = $('.search-box-mc');
        var searchBtn = $('.search-box-btn');
        var searchInput = $('.search-box-mc input[type="text"]');
        var searchImage =$('.search-box-mc input[type="image"]');
        searchBtn.on('click', function(e){
            e.preventDefault();
            searchImage.removeClass('nomore');
            searchInput.removeClass('nomore').animate({
                right: "111",
                width: "541",
                padding: "0 0 0 45"
            }, 500, function(){
                searchBtn.removeClass('showme').addClass('nomore');
            });
        });
        searchBox.on('mouseleave', function(e){
            e.preventDefault();
            searchInput.animate({
                right: "0",
                width: "0",
                padding: "0"
            }, 500, function(){
                searchBtn.removeClass('nomore').addClass('showme');
                searchImage.addClass('nomore');
                searchInput.addClass('nomore').val('');
            });
        });

        $(window).scroll(function() {
            if ($('header.site-header').css('position') == 'fixed'){
                if ($(this).scrollTop() > 1){
                    $('header.site-header').addClass("sticky");
                    $('.logo-overlay').addClass("sticky");
                    $('.search-box-btn').addClass('search-icon-sm');
                }
                else{
                    $('header.site-header').removeClass("sticky");
                    $('.logo-overlay').removeClass("sticky");
                    $('.search-box-btn').removeClass('search-icon-sm');
                }
            }


        });


        function featuredImage(feature){
                $(feature).eq(0).addClass('featured-one');
                $(feature).eq(1).addClass('featured-two');
                $(feature).eq(2).addClass('featured-three');
        }
        featuredImage('.sticky');
        var emailForm = ('input#mc4wp_email');
        $(emailForm).on('focus', function(){

            $('.email-priv').removeClass('nomore');
        })
        $(emailForm).on('blur', function(){
            $('.email-priv').addClass('nomore');
        })
        $('li.menu-item a').wrapInner('<span class="hide-mc"></span>');
        var mobileMenu = $('#mobile-men');
        mobileMenu.on('click', function(e){
            e.preventDefault();
            $('.mobile-navigation').slideToggle(200, function(){
                // Animation complete.
                if ((mobileMenu).hasClass('burger')){
                    mobileMenu.removeClass('burger').addClass('x-me');
                }
                else {
                    mobileMenu.removeClass('x-me').addClass('burger');
                }
            });
        });
    })
});