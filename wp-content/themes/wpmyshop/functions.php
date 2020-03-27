<?php

// Add scripts and stylesheets
function wpmyshop_scripts() {
    // Theme stylesheet.
	wp_enqueue_style( 'wpmyshop-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrapmin', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '' );
	wp_enqueue_style( 'small-business', get_template_directory_uri() . '/css/small-business.css', array(), '' );
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.css', array(), '' );
	wp_enqueue_script( 'bootstrapminjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),  true );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array(),  true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}	
        
    // Load the html5 shiv.
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
}

add_action( 'wp_enqueue_scripts', 'wpmyshop_scripts' );

// Add Google Fonts
function wpmyshop_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'wpmyshop_google_fonts');

function wpmyshop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wpmyshop' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wpmyshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	
}
add_action( 'widgets_init', 'wpmyshop_widgets_init' );

$args = array(
	'flex-width'    => true,
	'width'         => 600,
	'flex-height'    => true,
	'height'        => 200
	
);
add_theme_support( 'custom-header', $args );


function wpmyshop_setup() {
	
	load_theme_textdomain( 'wpmyshop' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'wpmyshop-featured-image', 2000, 1200, true );

	add_image_size( 'wpmyshop-thumbnail-avatar', 100, 100, true );
        
//        add_theme_support( "custom-header");
        
        add_theme_support( "custom-background");
        
        add_editor_style();

	// Set the default content width.
	
	function wpmyshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpmyshop_content_width', 740 );
}
add_action( 'after_setup_theme', 'wpmyshop_content_width', 0 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wpmyshop' )
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	
	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

					),

		
		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'top' => array(
				'name' => __( 'Top Menu', 'wpmyshop' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			
		),
	);

	
	$starter_content = apply_filters( 'wpmyshop_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'wpmyshop_setup' );


function wpmyshop_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'wpmyshop_body_classes' );

require get_template_directory() . '/inc/template-tags.php';

function wpmyshop_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'wpmyshop_javascript_detection', 0 );

function wpmyshop_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'wpmyshop_post_thumbnail_sizes_attr', 10 , 3 );
?>