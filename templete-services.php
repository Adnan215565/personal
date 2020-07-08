<?php

/**
 * Template Name: Services Template
 * Template Post Type: post, page
 *
 * @since Personal Theme 1.0.0
 */


 get_header();?>
<?php while ( have_posts() ) : the_post(); ?>

			<!-- start banner Area -->
			<section class="about-banner"<?php if(has_post_thumbnail()):?> style="background-image: url(<?php echo the_post_thumbnail_url( 'large' ) ?>);<?php endif; ?>">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								<?php the_title();?>				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo site_url(); ?>">Home  <span class="lnr lnr-arrow-right"></span></a> <?php the_title();?> </p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->


	<?php get_template_part('content/promo2'); ?>

	<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">				
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2536</h1>
							<p>Projects Completed</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">6784</h1>
							<p>Happy Clients</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee</p>
						</div>	
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">435</h1>
							<p>Real Professionals</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->	


	<?php get_template_part('content/prices_promo'); ?>


		<?php get_template_part('content/promo'); ?>



		


	<?php endwhile; ?>

 













<?php get_footer(); ?>