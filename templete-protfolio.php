<?php
/**
 * Template Name: Protfolio Template
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

		<?php get_template_part('content/protfolio_promo'); ?>


	<?php endwhile; ?>



<?php get_footer(); ?>