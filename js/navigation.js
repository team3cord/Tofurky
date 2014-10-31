/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};
} )();
jQuery(function($){
    $(document).ready(function(){

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
        $('#mc-search').on('click', function(e){
            e.preventDefault();
            $('.search-box-mc').addClass('display-search');
        });
        $('.entry-content-single img').parent('p').addClass('full-image');
        function featuredImage(feature){
                $(feature).eq(0).addClass('featured-one');
                $(feature).eq(1).addClass('featured-two');
                $(feature).eq(2).addClass('featured-three');
        }
        featuredImage('.sticky');
        $('li.menu-item a').wrapInner('<span class="hide-mc"></span>');
        $('#mobile-men').on('click', function(e){
            e.preventDefault();
            $('.main-navigation').slideToggle(1000, function(){
                // Animation complete.
            })
        });
    })
});