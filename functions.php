<?php
/**
 * icsan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package icsan
 */

if ( ! function_exists( 'icsan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function icsan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on icsan, use a find and replace
		 * to change 'icsan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'icsan', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'icsan' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'icsan_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'icsan_setup' );

update_option( 'siteurl', 'https://icsan.org' );
update_option( 'home', 'https://icsan.org' );

function create_post_type() {
	$labels = array(
			'name' => 'Program',
			'singular_name' => 'Program',
			'add_new' => 'Add Program',
			'all_items' => 'All Programs',
			'add_new_item' => 'Add Program',
			'edit_item' => 'Edit Program',
			'new_item' => 'New Program',
			'view_item' => 'View Program',
			'search_items' => 'Search Programs',
			'not_found' => 'No Programs found',
			'not_found_in_trash' => 'No Programs found in trash',
			'parent_item_colon' => 'Parent Program'
			//'menu_name' => default to 'name'
		);
	
  register_post_type( 'icsan_programs',
    array(
      	'labels' => $labels,
      	'public' => true,
      	'hierarchical' => true,
	    'taxonomies'   => array( 'category' ),	
		'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'page-attributes',
				'custom-fields'
			),
    )
  );
  
  $labels2 = array(
			'name' => 'Resource',
			'singular_name' => 'Resource',
			'add_new' => 'Add Resource',
			'all_items' => 'All Resources',
			'add_new_item' => 'Add Resource',
			'edit_item' => 'Edit Resource',
			'new_item' => 'New Resource',
			'view_item' => 'View Resource',
			'search_items' => 'Search Resources',
			'not_found' => 'No Resources found',
			'not_found_in_trash' => 'No Resources found in trash',
			'parent_item_colon' => 'Parent Resource'
			//'menu_name' => default to 'name'
		);
  register_post_type( 'icsan_resources',
    array(
      	'labels' => $labels2,
      	'public' => true,
      	'hierarchical' => true,
	    'taxonomies'   => array( 'category' ),	
		'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'page-attributes'
			),
    )
  );
  $labels3 = array(
			'name' => 'Campaign',
			'singular_name' => 'Campaign',
			'add_new' => 'Add Campaign',
			'all_items' => 'All Campaigns',
			'add_new_item' => 'Add Campaign',
			'edit_item' => 'Edit Campaign',
			'new_item' => 'New Campaign',
			'view_item' => 'View Campaign',
			'search_items' => 'Search Campaigns',
			'not_found' => 'No Campaigns found',
			'not_found_in_trash' => 'No Campaigns found in trash',
			'parent_item_colon' => 'Parent Campaign'
			//'menu_name' => default to 'name'
		);
  register_post_type( 'icsan_campaigns',
    array(
      	'labels' => $labels3,
      	'public' => true,
      	'hierarchical' => true,
	    'taxonomies'   => array( 'category' ),	
		'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'page-attributes'
			),
    )
  );
  
}
add_action( 'init', 'create_post_type' );

// function campaign( $atts ) {
//     $args = array(
//     'post_type' => 'icsan_campaigns',
//     'posts_per_page' => 5, 'order' => 'ASC',
//     // 'post_parent' => 20
//     );

//     $the_query = new WP_Query( $args );
//     if ( $the_query->have_posts() ){
//         while($the_query->have_posts()){
//             $the_query->the_post(); 
//             echo the_title();
//         }
//     }
//     wp_reset_postdata();
// }

// add_shortcode( 'bear_ads', 'campaign' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function icsan_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'icsan_content_width', 640 );
}
add_action( 'after_setup_theme', 'icsan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function icsan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'icsan' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'icsan' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Special Page Top', 'icsan' ),
		'id'            => 'special_top',
		'description'   => esc_html__( 'Add widgets here.', 'icsan' ),
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'icsan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function icsan_scripts() {
    
	wp_enqueue_style( 'icsan-style', get_template_directory_uri() . '/dist/site.css', array(), '20200120', false );
	
	wp_enqueue_style( 'icsan-style-overrides', get_template_directory_uri() . '/dist/overrides.css', array(), '20200313', false );

	wp_enqueue_script( 'icsan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'icsan-vendorjs', get_template_directory_uri() . '/dist/vendor.js', array(), '20151215', true );

	wp_enqueue_script( 'icsan-js', get_template_directory_uri() . '/dist/site.js', array('icsan-vendorjs'), '20201220', true );

	wp_enqueue_script( 'icsan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'icsan_scripts' );
function register_primary_menu() {
	register_nav_menu( 'mini', __( 'Mini Bar', 'theme-text-domain' ) );
	register_nav_menu( 'primary', __( 'Main Navigation', 'theme-text-domain' ) );
}
function register_footer_menus() {
	register_nav_menu( 'footer1', __( 'Footer 1', 'theme-text-domain' ) );
	register_nav_menu( 'footer2', __( 'Footer 2', 'theme-text-domain' ) );
	register_nav_menu( 'footer3', __( 'Footer 3', 'theme-text-domain' ) );
	register_nav_menu( 'footer4', __( 'Footer 4', 'theme-text-domain' ) );
	register_nav_menu( 'footer5', __( 'Footer 5', 'theme-text-domain' ) );
	register_nav_menu( 'footer6', __( 'Footer 6', 'theme-text-domain' ) );
	register_nav_menu( 'footer7', __( 'Footer 7', 'theme-text-domain' ) );
}

add_action( 'after_setup_theme', 'register_primary_menu' );
add_action( 'after_setup_theme', 'register_footer_menus' );



function transform($data, $mapping) {
    $out = [];
    foreach($data as $item){
        $new_item = [];
        foreach( $mapping as $key => $val){
            $new_item[$val] = $item->$key;
        }
        $loc = EM_Locations::get($item->location_id)[0];
        
        $new_item['url'] = "/events/$item->post_name";
        $new_item['location'] = $loc->location_name;
        $out[] = $new_item;
    }
    return $out;
}


function _add_data() {
    $eventArr = EM_Events::get();
    
    $tr = ['name' => 'title', 'start_date' => 'start', 'end_date' => 'end', 'start_time' => 'start_t', 'end_time' => 'end_t'];
    $data = transform($eventArr, $tr);
    

	wp_localize_script('bear_js', 'icsan_events', $data);
}

add_action( 'template_redirect', '_add_data' );


require get_template_directory() . '/wp-bootstrap-navwalker.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

