<?php
/*
Template Name:Homepage Template
*/
?>


<?php 
//=======This is Banner area=====

$banner_1_title = cs_get_option('banner_1_title');
$banner_1_subtitle = cs_get_option('banner_1_subtitle');
$banner_1_text = cs_get_option('banner_1_text');

//This is ABOUT AREA
$about_area_title = cs_get_option('about_area_title');
$about_area_title_subtitle = cs_get_option('about_area_title_subtitle');
$about_area_title_text = cs_get_option('about_area_title_text');

//==========This Banner image funtion========

$banner_1_img = cs_get_option('banner_1_img');
$banner_1_img_array = wp_get_attachment_image_src(cs_get_option('banner_1_img') , 'large');

if(!empty($banner_1_img)){
	$banner_1_img = $banner_1_img_array[0];
} else {
	$banner_1_img = ''.get_template_directory_uri().'/assets/img/hero-img.png';
}

//==========This About Area image funtion========
$about_area_img = cs_get_option('about_area_img');
$about_area_img_array = wp_get_attachment_image_src(cs_get_option('about_area_img') , 'large');

if(!empty($about_area_img)){
	$about_area_img = $about_area_img_array[0];
} else {
	$about_area_img = ''.get_template_directory_uri().'/assets/img/about-img.png';
}



 get_header();?>
			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">

							<h6><?php echo $banner_1_subtitle ;?></h6>
							<h1><?php echo $banner_1_title ; ?></h1>
							<?php echo wpautop($banner_1_text) ?>

							<a href="#" class="primary-btn text-uppercase">discover now</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img src="<?php echo $banner_1_img ;?>" alt="">
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="<?php echo $about_area_img?>"  alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">

                           <h6><?php echo $about_area_title_subtitle ;?></h6>		
							<h1 class="text-uppercase"><?php echo $about_area_title ;?></h1>
							<?php echo wpautop($about_area_title_text) ?>

							<a href="#" class="primary-btn text-uppercase">View Full Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
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
			<?php get_template_part('content/protfolio_promo'); ?>

		<!-- This call promoi section where was a testomonial text -->


			<?php get_template_part('content/promo'); ?>

			<!-- ================================== -->
		
			<?php get_template_part('content/prices_promo') ?>

			<?php get_template_part('content/latest_post') ?>

				
<?php get_footer();?>