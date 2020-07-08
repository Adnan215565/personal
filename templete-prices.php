<?php
/**
 * Template Name: Prices Template
 */
 get_header();?>

 <?php 
$faq_title = cs_get_option('faq_title');
$faq_text = cs_get_option('faq_text');
$faq_enable = cs_get_option('faq_enable');
 ?>
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

			<?php get_template_part('content/prices_promo');?>


<?php if($faq_enable == true): ?>
			
			<!-- Start faq Area -->
			<section class="faq-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"><?php echo $faq_title ?></h1>
								<?php echo wpautop($faq_text ) ?>
							</div>
						</div>
					</div>						

							<!--   <pre><?php echo var_dump($faq_options) ?></pre> -->
					<!-- 	<?php
								$faq_no= 0;
								$faq_options = cs_get_option('faq_options');
								foreach ($faq_options as $faq_option ):
								$faq_no++; 

								if($faq_no = 1){
										$area = 'active';
								} else {
									$area = '';
								}
							?>
							
							<dt>
								<a href="<?php echo $faq_no;?>" class="<?php echo $area ?>"> <?php echo $faq_option['faq_options_title']; ?></a>
							</dt>
							<?php echo $faq_option['faq_options_text'];?>
							
							<?php endforeach; ?>  -->
					 
                  <div class="row justify-content-center">
						<div class="col-lg-8">
						<dl class="accordion">
							<dt>
								<a href="" class="active">Dude You Re Getting A Telescope</a>
							</dt>
							<dd style="display: block;">
							Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
							</dd>
							<dt>
								<a href="">The Basics Of Buying A Telescope</a>
							</dt>
							<dd style="display: none;">
							Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. leo quam aliquet diam, congue laoreet elit metus eget diam.
							</dd>
							<dt>
								<a href="">Astronomy Binoculars A Great Alternative</a>
							</dt>
							<dd style="display: none;">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
							</dd>
							<dt>
								<a href="">Do Your Self Realizations Quickly Fade</a>
							</dt>
							<dd style="display: none;">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
							</dd>
							<dt>
								<a href="">Success Steps For Your Personal Or Business Life</a>
							</dt>
							<dd style="display: none;">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
							</dd>
						</dl>
       
						</div>
					</div>
<!-- 				<?php endif ;?> -->
				</div>	
			</section>
			<!-- End faq Area -->
			

	<?php endwhile; ?>

 













<?php get_footer(); ?>