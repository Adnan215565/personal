<?php
/**
 * Template Name: About Template
 */
 get_header();?>

 <?php
//This is ABOUT AREA
$about_area_title = cs_get_option('about_area_title');
$about_area_title_subtitle = cs_get_option('about_area_title_subtitle');
$about_area_title_text = cs_get_option('about_area_title_text');
$about_area_another_text = cs_get_option('about_area_another_text');


//==========This About Area image funtion========
$about_area_img = cs_get_option('about_area_img');
$about_area_img_array = wp_get_attachment_image_src(cs_get_option('about_area_img') , 'large');

if(!empty($about_area_img)){
	$about_area_img = $about_area_img_array[0];
} else {
	$about_area_img = ''.get_template_directory_uri().'/assets/img/about-img.png';
}


 ?>

<?php while ( have_posts() ) : the_post(); ?>

			<!-- start banner Area -->
			<section class="about-banner"<?php if(has_post_thumbnail()):?> style="background-image: url(<?php echo the_post_thumbnail_url( 'large' ) ?>);<?php endif; ?>" >
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



			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
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
						<?php echo wpautop($about_area_another_text);?>
					</div>


					<div class="row skillbar-wraps">					
						<div class="col-lg-6 skill-left">
							<div class="single-skill">
								<p>
									After Effects 85%
								</p>
								<div class="skill" data-width="85"></div>
							</div>
							<div class="single-skill">
								<p>
									Photoshop 90%
								</p>
								<div class="skill" data-width="90"></div>
							</div>
							<div class="single-skill">
								<p>
									Illustrator 70%
								</p>
								<div class="skill" data-width="70"></div>
							</div>																				
						</div>
						<div class="col-lg-6 skill-right">
							<div class="single-skill">
								<p>
									Sublime 95%
								</p>
								<div class="skill" data-width="95"></div>
							</div>								
							<div class="single-skill">
								<p>
									Sketch 85%
								</p>
								<div class="skill" data-width="85"></div>
							</div>
							
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	


			<!-- Start timeline Area -->
			<section class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center">
                        <h1 class="mb-10">My Qualifications</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>				
			  <ul>
			    <li>
			      <div class="content">
		        <img class="img-fluid mx-auto d-block mb-30" src="<?php echo get_template_directory_uri();?>/assets/img/blog/c5.jpg" alt="">
			        <h4>
			          <time>Masters in Graphics & Fine Arts</time>
			        </h4>
			        <p><b>Session:</b> 2010-11</p>
			        <p><b>Result:</b> 3.78 (In the Scale of 4.00)</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="<?php echo get_template_directory_uri();?>/assets/img/blog/c1.jpg" alt="">
			        <h4>
			          <time>Creative Content Developer</time>
			        </h4>
			        <p>July 2015 to Present</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
		        <img class="img-fluid mx-auto d-block mb-30" src="<?php echo get_template_directory_uri();?>/assets/img/blog/c4.jpg" alt="">
			        <h4>
			          <time>Bachelor in Graphics & UI/UX</time>
			        </h4>
			        <p><b>Session:</b> 2006-09</p>
			        <p><b>Result:</b> 3.40 (In the Scale of 4.00)</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="<?php echo get_template_directory_uri();?>/assets/img/blog/c2.jpg" alt="">
			        <h4>
			          <time>Senior UI/UX Designer</time>
			        </h4>
			        <p>July 2015 to Present</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
		        <img class="img-fluid mx-auto d-block mb-30" src="<?php echo get_template_directory_uri();?>/assets/img/blog/c3.jpg" alt="">
			        <h4>
			          <time>Diploma in Fine Arts & Printing</time>
			        </h4>
			        <p><b>Session:</b> 2003-06</p>
			        <p><b>Result:</b> 4.94 (In the Scale of 5.00)</p>
			      </div>
			    </li>
			  </ul>
			</section>		

			<!-- End timeline Area -->




		<!-- This call promoi section where was a testomonial text -->


			<?php get_template_part('content/promo'); ?>

			<!-- ================================== -->
		


	<?php endwhile; ?>

 
<?php get_footer(); ?>












