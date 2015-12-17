<!-- content masonry -->
<div <?php post_class(); ?>>
    <article class="item dark-lft" id="post-<?php the_ID(); ?>"  >
        <div class="dark-btm">
        <?php if ( has_post_thumbnail() ) :
            $cats = get_the_category();
            $cat_name = $cats[0]-> name; ?>
            <div class="masonry-thumbnail">
               <!-- <a href="<?//php echo esc_url( home_url( '/' ) ); ?>category/<?//php  echo $cat_name ?>"><div class="post-cat-icon <?//php  echo $cat_name ?>"></div></a>-->
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('masonry-thumb'); ?></a>
            </div><!--.masonry-thumbnail-->
        <?php endif; ?>
        <div class="masonry-details">
            <h5><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><span class="masonry-post-title"> <?php the_title(); ?></span></a></h5>
            <div class="com-tag">
                <span class="comment-num"><?php echo comments_number(); ?></span>
                <span class="tag-list"><?php echo get_the_tag_list(' ',', ',' '); ?></span>
            </div>
            <!-- <div class="masonry-post-excerpt">
                <//?php the_excerpt(); ?>
            </div><!--.masonry-post-excerpt-->
        </div><!--/.masonry-entry-details -->
        </div>

    </article><!--/.masonry-entry-->
</div>
