<?php

function irina_nmh47_theme_files() {
	
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0','all' );
	wp_enqueue_style( 'ico-font', get_template_directory_uri() . '/assets/css/icofont.css', array(), '1.0','all' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0','all' );
	wp_enqueue_style( 'range-slider', get_template_directory_uri() . '/assets/css/range.css', array(), '1.0','all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0','all' );
	wp_enqueue_style( 'Main-CSS', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0','all' );
	wp_enqueue_style( 'responsive-CSS', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0','all' );

	wp_enqueue_style( 'soldis-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'range-js', get_template_directory_uri() . '/assets/js/range.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'countdown-js', get_template_directory_uri() . '/assets/js/countdown.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'irina-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action('wp_enqueue_scripts','irina_nmh47_theme_files');



function irina_nmh47_theme_supports(){

	//loading theme textdomain
	load_theme_textdomain( 'irina', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//adding support for automatic title tag
	add_theme_support( 'title-tag' );

	//enabling post thumbnail support
	add_theme_support( 'post-thumbnails' );

	//enabling custom image size
	add_image_size( 'irina-thumb', 740, 520, true );

	// regestaring primary & secondary menu
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'irina' ),
		'menu-2' => esc_html__( 'Footer', 'irina' ),
	) );

	//HTML5 Support
	add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	//add custom logo
	add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	
}
add_action('after_setup_theme','irina_nmh47_theme_supports');

//widget to shortcode
add_filter('widget_text', 'do_shortcode');



//CUSTOM POST REGISTER

//custom posts register

function irina_nmh47_theme_custom_posts() {

	//team-members data
	register_post_type( 'testimonial_review',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'testimonial_review' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-businessman',
        )
    );

}
add_action( 'init','irina_nmh47_theme_custom_posts' );





//including cs-framework
require get_template_directory(). '/inc/cs-framework/cs-framework.php';

// Custom Slug Generate
function create_slug($slug){
    $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
    $spacesDuplicateHypens = '/[\-\s]+/';

    $slug = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($slug, 'UTF-8'));
    $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
    $slug = trim($slug, '-');

    return $slug;
}


//register widget
function irina_nmh47_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Menu', 'irina' ),
		'id'            => 'footer-menu',
		'description'   => esc_html__( 'Add Footer Menu Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Post List', 'irina' ),
		'id'            => 'footer-post-list',
		'description'   => esc_html__( 'Add Footer Post List Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Hero Area Form', 'irina' ),
		'id'            => 'hero-area-form',
		'description'   => esc_html__( 'Add Hero Area Form Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Hero Area Form', 'irina' ),
		'id'            => 'hero-area-form',
		'description'   => esc_html__( 'Add Hero Area Form Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Calculation Area Form', 'irina' ),
		'id'            => 'complex-area-form',
		'description'   => esc_html__( 'Add Calculation Area Form Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Course Area Form', 'irina' ),
		'id'            => 'course-area-form',
		'description'   => esc_html__( 'Add Course Area Form Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact Page Map', 'irina' ),
		'id'            => 'contact-page-map',
		'description'   => esc_html__( 'Add Contact Page Map Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact Page Form', 'irina' ),
		'id'            => 'contact-page-form',
		'description'   => esc_html__( 'Add Contact Page Form Widget.', 'irina' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'irina_nmh47_widgets_init' );



// shortcode for custom post (footer thumbpost)

function thumb_post_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 4,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $list .= '
        <li>
			<a href="'.get_permalink().'">'.get_the_title().'/'			
			.get_the_date('d.m.Y',$idd).'/'.'</a>					
		</li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('footer_list_posts', 'thumb_post_list_shortcode');