<?php
/**
 * Template Name: Home Page
 *
 * Displays the Home page with Parallax effects.
 *
 */
?>

<?php get_header(); ?>

<div class="col-md-12">
    <?php if ( !function_exists('dynamic_sidebar')  || !dynamic_sidebar( 'sidebar-home' ) ):  ?>
    <div class="container-fluid p24 page-content p0">
    	<div id="home-banner" class="container-fluid p0">
    		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    	</div><!-- end #home-banner.margin-bottom -->
	</div><!-- end .container-fluid.p24.wp-caption-text -->
	<?php
	$args = array(
		'post_type' => 'product',
		'stock' => 1,
		'posts_per_page' => 4,
		'orderby' =>'date',
		'order' => 'DESC'
	);

	$loop = new WP_Query($args);
	if ($loop->have_posts()) : ?>

	<div class="row-fluid products">
		<h2>Nuevos Productos</h2>
		<?php

		while ($loop->have_posts()) : $loop->the_post(); global $product; ?>
		<div class="col-md-3 product">
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

		<?php endwhile; ?>
	</div>
	<?php else : ?>

	<h2>No hay productos</h2>

	<?php endif; ?>
	<?php wp_reset_query(); ?>

	<!-- ALL NEW HERE -->
	<!-- ////////////////////////////////////////////////// -->

	<?php
	$args = array(
		'post_type' => 'post',
		'stock' => 1,
		'posts_per_page' => 3,
		'orderby' =>'date',
		'order' => 'DESC'
	);

	$loop = new WP_Query($args);
	if ($loop->have_posts()) : ?>

	<div class="row-fluid posts">
		<h2>Consejos Útiles</h2>
		<?php

		while ($loop->have_posts()) : $loop->the_post(); global $post; ?>
		<div class="col-md-4 post">
			<a id="post-id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="brief">
					<p><?php the_content(); ?></p>
				</div>
			</a>
		</div><!-- end col-md-4.post -->

		<?php endwhile; ?>
	</div>
	<?php else : ?>

	<h2>No hay post recientes</h2>

	<?php endif; ?>
	<?php wp_reset_query(); ?>

    <?php endif; ?>
</div>

<?php get_footer(); ?>