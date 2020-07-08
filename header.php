	<!DOCTYPE html>
	<html 
		  <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta <?php bloginfo( 'charset')?>>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php bloginfo('name'); ?></title>
		<link  href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"rel="stylesheet">

	<?php wp_head();?>


		</head>
		<body <?php body_class(); ?>>	
			
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="template-welcome.php"; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="" title="" /></a> </div>
			      <nav id="nav-menu-container">

					<?php wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu_class'      => 'nav-menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>

			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

