<?php get_header(); ?>
<div id="main">
	<?php get_sidebar(); ?>
	<div id="content" class="auric-a float-right">
		<div class="content-inner">
			<div class="flex-box products">
			<?php if (have_posts()) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="box product">
					<div class="image">
						<?php echo woocommerce_get_product_thumbnail(); ?>
					</div>
					<div class="name">
						<h3><a href="<?php echo get_permalink( $product->id ); ?>"><?php echo woocommerce_template_single_title(); ?></a></h3>
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
							<div class="size"><?php echo $product->get_attribute('size'); ?>cm</div>
							<div class="volume">
								<span class="icon ion-waterdrop"></span>
								<span class="value"><?php echo $product->get_attribute('absorption'); ?>ml</span>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
			<?php else : ?>
			<h2>No se encontraron productos</h2>
			<?php endif; ?>
			<!-- <div class="flex-box products">
				<div class="products-row">
					<div class="box product">
						<div class="image">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/temp/product-1.png" alt="INDASEC EXTRA x 20u.">
						</div>
						<div class="name">
							<h3><a href="#">INDASEC EXTRA x 20u.</a></h3>
						</div>
						<div class="props">
							<span class="prod-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/special-icons/towel.png" alt="Towel">
							</span>
							<div class="prod-attrs">
								<div class="size">32cm</div>
								<div class="volume">
									<span class="icon ion-waterdrop"></span>
									<span class="value">400ml</span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="box product">
						<div class="image">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/temp/product-1.png" alt="INDASEC EXTRA x 20u.">
						</div>
						<div class="name">
							<h3><a href="#">INDASEC EXTRA x 20u.</a></h3>
						</div>
						<div class="props">
							<span class="prod-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/special-icons/towel.png" alt="Towel">
							</span>
							<div class="prod-attrs">
								<div class="size">32cm</div>
								<div class="volume">
									<span class="icon ion-waterdrop"></span>
									<span class="value">400ml</span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="box product">
						<div class="image">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/temp/product-1.png" alt="INDASEC EXTRA x 20u.">
						</div>
						<div class="name">
							<h3><a href="#">INDASEC EXTRA x 20u.</a></h3>
						</div>
						<div class="props">
							<span class="prod-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/special-icons/towel.png" alt="Towel">
							</span>
							<div class="prod-attrs">
								<div class="size">32cm</div>
								<div class="volume">
									<span class="icon ion-waterdrop"></span>
									<span class="value">400ml</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="products-row">
					<div class="box product">
						<div class="image">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/temp/product-1.png" alt="INDASEC EXTRA x 20u.">
						</div>
						<div class="name">
							<h3><a href="#">INDASEC EXTRA x 20u.</a></h3>
						</div>
						<div class="props">
							<span class="prod-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/special-icons/towel.png" alt="Towel">
							</span>
							<div class="prod-attrs">
								<div class="size">32cm</div>
								<div class="volume">
									<span class="icon ion-waterdrop"></span>
									<span class="value">400ml</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			</div>
		</div>
	</div>
</div> <!-- end #main.padding-slides -->
<div id="delimiter"></div>
<?php get_footer(); ?>