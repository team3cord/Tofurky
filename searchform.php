<form action="<?php echo bloginfo('url'); ?>" method="get">
    <fieldset class="green-text" >

        <input type="text" name="s" id="search"placeholder="What are you looking for?" value="<?php the_search_query(); ?>" />
        <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/imgs/search-open.jpg" />
    </fieldset>
</form>