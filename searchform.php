<form action="<?php echo bloginfo('url'); ?>" method="get">
    <fieldset class="green-text" >

        <input class="nomore" type="text" name="s" id="search"placeholder="What are you looking for?" value="<?php the_search_query(); ?>" />
        <div class="small-sticky">
            <input class="nomore" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/imgs/search-open2.png" />
        </div>
    </fieldset>
</form>