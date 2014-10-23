<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Hood River
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
     <img src="<?php echo get_template_directory_uri(); ?>/imgs/hash-stream-fpo.jpg">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
