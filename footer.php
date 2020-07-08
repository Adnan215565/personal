<?php if(!is_page(array('12','31' ,'14' ,'18' ,'16'))) : 

	$logos_enable = cs_get_option('logos_enable');
	$logos = cs_get_option('logos');

?>




<?php if($logos_enable == true):?>

		    <!-- Start brands Area -->
		    <section class="brands-area">
		        <div class="container">
		            <div class="brand-wrap">
		                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="<?php echo get_template_directory_uri();?>/assets/img/l1.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="<?php echo get_template_directory_uri();?>/assets/img/l2.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="<?php echo get_template_directory_uri();?>/assets/img/l3.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="<?php echo get_template_directory_uri();?>/assets/img/l4.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="<?php echo get_template_directory_uri();?>/assets/img/l5.png" alt=""></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		<?php endif;?>
		    <!-- End brands Area -->			

<?php endif;?>

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
							 <div class="single-footer-widget">

                                <?php dynamic_sidebar('footer-1'); ?>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-footer-widget">
                            	<?php dynamic_sidebar('footer-2') ?>
                            </div>
                        </div>
                        <div class="col-md-2 social-widget">
                            <div class="single-footer-widget">
                            	<?php dynamic_sidebar('footer-3') ?>
                        </div>
                    </div>
                </div>
            </footer>




            <?php wp_footer();?>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
		</body>
	</html>