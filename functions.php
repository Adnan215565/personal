<?php 

function personal_theme_files() {
	wp_enqueue_style('owl-carousel',get_template_directory_uri() . '/assets/css/owl.carousel.css',array(),'1.0.0','all');
	wp_enqueue_style('animate',get_template_directory_uri() . '/assets/css/animate.min.css',array(),'1.0.0','all');
	wp_enqueue_style('inearicons',get_template_directory_uri() . '/assets/css/linearicons.css',array(),'1.0.0','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri() . '/assets/css/font-awesome.min.css',array(),'1.0.0','all');
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css',array(),'1.0.0','all');
	wp_enqueue_style('magnific-popup.css',get_template_directory_uri() . '/assets/css/magnific-popup.css',array(),'1.0.0','all');
	wp_enqueue_style('jquery-ui',get_template_directory_uri() . '/assets/css/jquery-ui.css',array(),'1.0.0','all');
	wp_enqueue_style('nice-select',get_template_directory_uri() . '/assets/css/nice-select.css',array(),'1.0.0','all');

	//Stylesheet css
	wp_enqueue_style('personal_theme',get_stylesheet_uri());



 	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/assets/js/hoverIntent.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'tabs', get_template_directory_uri() . '/assets/js/jquery.tabs.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js',array('jquery'), '1.0.0', true );
 	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js',array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'simple-skillbar', get_template_directory_uri() . '/assets/js/simple-skillbar.js',array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'mail-script', get_template_directory_uri() . '/assets/js/mail-script.js',array('jquery'), '1.0.0', true );

//This is common JS file

 	wp_enqueue_script( 'personal-script', get_template_directory_uri() . '/assets/js/main.js',array('jquery'), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'personal_theme_files' );

 

//======Support File 


function personal_suport() {

	//Loading support link
	load_theme_textdomain( 'personal', get_template_directory() . '/languages' );

	// Genarated aumated fead link
	add_theme_support( 'automatic-feed-links' );

	//Adding support for title tag
	add_theme_support( 'title-tag' );

	//Post tumbnil support 
	add_theme_support( 'post-thumbnails' );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Main-Menu', 'neuron' ),
			)
		);


		//Footer menu
	register_nav_menus(
			array(
				'menu-2' => esc_html__( 'Footer', 'neuron' ),
			)
		);

	//HTML5 support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	//Custrom Logo support
	add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	
}

add_action('after_setup_theme','personal_suport');


//Custrom Post


//Custrom widgets regiter



//Custrom widgets regiter
function personal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer one', 'neuron' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer one widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer two', 'neuron' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer two widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer tree', 'neuron' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add footer three widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

}
add_action( 'widgets_init', 'personal_widgets_init' );//==End widgets



//Custrom post


add_action( 'init', 'personal_theme_custom_post' );
function personal_theme_custom_post() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'Slide' )
            ),
            'supports' => array('title', 'editor','thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Services' )
            ),
            'supports' => array('title', 'editor','thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __( 'Features' ),
                'singular_name' => __( 'Features' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );

    register_post_type( 'protfolio',
        array(
            'labels' => array(
                'name' => __( 'Protfolios' ),
                'singular_name' => __( 'Protfolio' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
     register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Blog Posts' ),
                'singular_name' => __( 'Blog Posts' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
             'show_ui' => true
        )
    );

};

//Include Frame work

require get_template_directory() . '/inc/cs-framework/cs-framework.php';

