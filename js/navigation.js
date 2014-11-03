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
        searchBox.on('mouseenter', function(e){
            e.preventDefault();
            searchInput.animate({
                right: "111",
                width: "501"
            }, 1000, function(){
                searchBtn.removeClass('showme');
                searchBtn.addClass('nomore');
            });
        });
        searchBox.on('mouseleave', function(e){
            e.preventDefault();
            searchInput.animate({
                right: "0",
                width: "0"
            }, 1000, function(){
                searchBtn.removeClass('nomore');
                searchBtn.addClass('showme');
            });
        });

        $(window).scroll(function() {
            if ($('header.site-header').css('position') == 'fixed'){
                if ($(this).scrollTop() > 1){
                    $('header.site-header').addClass("sticky");
                    $('.search-box-btn').addClass('search-icon-sm');
                }
                else{
                    $('header.site-header').removeClass("sticky");
                    $('.search-box-btn').removeClass('search-icon-sm');
                }
            }


        });

        $('.entry-content-single img').parent('p').addClass('full-image');
        function featuredImage(feature){
                $(feature).eq(0).addClass('featured-one');
                $(feature).eq(1).addClass('featured-two');
                $(feature).eq(2).addClass('featured-three');
        }
        featuredImage('.sticky');
        $('li.menu-item a').wrapInner('<span class="hide-mc"></span>');
        var mobileMenu = $('#mobile-men');
        mobileMenu.on('click', function(e){
            e.preventDefault();
            $('.mobile-navigation').slideToggle(1000, function(){
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