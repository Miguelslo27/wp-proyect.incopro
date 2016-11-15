<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-md-4 product">
	<a id="product-id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<div class="image">
			<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
		</div>
		<div class="name">
			<h3><?php the_title(); ?></h3>
		</div>
		<div class="props">
			<span class="prod-icon">
				<?php
				$icon = '';
				switch($product->get_attribute('pr_type')) {
					case 'Pañal':
						$icon = 'nappy';
					break;
					case 'Toalla':
						$icon = 'towel';
					break;
					case 'Jabón de manos':
						$icon = 'hands-soap';
					break;
				}
				?>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/special-icons/<?php echo $icon; ?>.png" alt="<?php echo $product->get_attribute('pr_type'); ?>">
			</span>
			<div class="prod-attrs">
				<div class="size"><?php echo $product->get_attribute('size'); ?>cms de cintura</div>
				<div class="volume">
					<span class="icon ion-waterdrop"></span>
					<span class="value"><?php echo $product->get_attribute('absorption'); ?>ml</span>
				</div>
			</div>
		</div>
	</a>
</div><!-- end col-md-3.product -->
