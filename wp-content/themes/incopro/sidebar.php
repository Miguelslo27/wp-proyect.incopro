<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package incopro
 */ ?>
    
<?php
if ( ! is_active_sidebar( 'sidebar-1' ) || ( function_exists('incopro_show_sidebar') && !incopro_show_sidebar() ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-3 hidden-sm" role="complementary">
	<?php // dynamic_sidebar( 'sidebar-1' ); ?>
	<?php incopro_get_product_categories(); ?>
</aside><!-- #secondary -->
