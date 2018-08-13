<?php
get_header();
?>

<div id="banner-header page-nav">
			<div class="navbar-main">             
              <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
					<?php
						$args = array(
						  'theme_location' => 'primary',
						  'menu' => 'top_menu',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav navbar-nav'
						);
						
						?>
					
						<?php wp_nav_menu($args); ?>
                </div> 
              </div>   
			</div>  
		</div>

<div class="page-heading text-center">

	<div class="container zoomIn animated">
		<div class="nc_links">
			<a href="<?php echo get_home_url()?>">Inicio</a>
			<a class="arrow">></a>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>

		<h2 class="page-title"><?php the_title(); ?><span class="title-under"></span></h2>	
	</div>

</div>

		<?php
			if ( is_singular( 'product' ) ) {

				while ( have_posts() ) :
					the_post();
					wc_get_template_part( 'content', 'single-product' );
				endwhile;
	
			} else {
				?>
				<?php do_action( 'woocommerce_archive_description' ); ?>
			
				<?php if ( have_posts() ) : ?>
	
					<div class="head_before_shop">
						<div class="container">
							<?php do_action( 'woocommerce_before_shop_loop' ); ?>
						</div>
					</div>

					<?php woocommerce_product_loop_start(); ?>
	
					<?php if ( wc_get_loop_prop( 'total' ) ) : ?>
						<?php while ( have_posts() ) : ?>
							<?php the_post(); ?>
							<?php wc_get_template_part( 'content', 'product' ); ?>
						<?php endwhile; ?>
					<?php endif; ?>
	
					<?php woocommerce_product_loop_end(); ?>
	
					<?php do_action( 'woocommerce_after_shop_loop' ); ?>
	
				<?php else : ?>
	
					<?php do_action( 'woocommerce_no_products_found' ); ?>
	
				<?php
				endif;
			} 	
		?>
	
<?php
get_footer();
?>