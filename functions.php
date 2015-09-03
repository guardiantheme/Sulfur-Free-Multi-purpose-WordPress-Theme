<?php
/**
 * sulfur functions and definitions
 *
 * @package sulfur
 */

if ( ! function_exists( 'sulfur_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sulfur_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sulfur, use a find and replace
	 * to change 'sulfur' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sulfur', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	
	if (function_exists('register_nav_menu')){
			register_nav_menu('main_menu', __('Main Menu', 'sulfur'));

		}

	/* Start Read More */    
    function read_more($limit){
       $post_content = explode(" ", get_the_content());
       $limit_text   = array_slice($post_content, 0, $limit);

       echo implode(" ", $limit_text);

    }
    /* End Read More */

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'gallery',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sulfur_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // sulfur_setup
add_action( 'after_setup_theme', 'sulfur_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sulfur_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sulfur_content_width', 640 );
}
add_action( 'after_setup_theme', 'sulfur_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sulfur_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sulfur' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
	  'name'          => esc_html__( 'Contact Us', 'sulfur' ),
	  'id'            => 'gt-sulfur-contactus',
	  'description'   => '',
	  'before_widget' => '<div class="contact_us">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<div class="section-title"><h3>',
	  'after_title'   => '</h3></div>',
	 
	 ) );
	register_sidebar( array(
	  'name'          => esc_html__( 'Recent Post', 'sulfur' ),
	  'id'            => 'gt-sulfur-recentpost',
	  'description'   => '',
	  'before_widget' => '<div class="latest-post">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<div class="section-title"><h3>',
	  'after_title'   => '</h3></div>',
	 
	 ) );
	register_sidebar( array(
	  'name'          => esc_html__( 'Stay WithUS', 'sulfur' ),
	  'id'            => 'gt-sulfur-staywithus',
	  'description'   => '',
	  'before_widget' => '<div class="contact_us">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<div class="section-title"><h3>',
	  'after_title'   => '</h3></div>',
	 
	 ) );
}
add_action( 'widgets_init', 'sulfur_widgets_init' );

 /* Start Pagination */
    function gt_sulfur_pagination( $query=null ) {
 
      global $wp_query;
      $query = $query ? $query : $wp_query;
      $big = 999999999;

      $paginate = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'type' => 'array',
        'total' => $query->max_num_pages,
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'prev_text' => __('Prev'),
        'next_text' => __('Next'),
        )
      );

      if ($query->max_num_pages > 1) :
    ?>
    <nav>
        <ul class="pagination">
          <?php
          foreach ( $paginate as $page ) {
            echo '<li>' . $page . '</li>';
          }
          ?>
        </ul>
    </nav>
    <?php
      endif;
    }
    
    /* End Pagination */


/**
 * Enqueue scripts and styles.
 */
function sulfur_scripts() {
	wp_enqueue_style( 'sulfur-style', get_stylesheet_uri() );

	wp_enqueue_style( 'tb_sulfur-animate.css', get_template_directory_uri().'/assets/css/animate.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-bootstrap.css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-fontawesome.css', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-lightbox.css', get_template_directory_uri().'/assets/css/lightbox.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-owl.carousel.css', get_template_directory_uri().'/assets/css/owl.carousel.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-owl.theme.css', get_template_directory_uri().'/assets/css/owl.theme.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-owl.transitions.css', get_template_directory_uri().'/assets/css/owl.transitions.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-responsive.css', get_template_directory_uri().'/assets/css/responsive.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-slick-theme.css', get_template_directory_uri().'/assets/css/slick-theme.css',null,'1.0');
    wp_enqueue_style( 'tb_sulfur-style.css', get_template_directory_uri().'/assets/css/style.css',null,'1.0');



   
    wp_enqueue_script( 'tb_sulfur-jquery-2.1.3.min.js', get_template_directory_uri().'/assets/js/jquery-2.1.3.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-count-to.js', get_template_directory_uri().'/assets/js/count-to.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-jquery-migrate-1.2.1.min.js', get_template_directory_uri().'/assets/js/jquery-migrate-1.2.1.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-jquery.appear.js', get_template_directory_uri().'/assets/js/jquery.appear.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-jquery.fitvids.js', get_template_directory_uri().'/assets/js/jquery.fitvids.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-jquery.isotope.js', get_template_directory_uri().'/assets/js/jquery.isotope.js', array('jquery'),'1.0',true);
    
    wp_enqueue_script( 'tb_sulfur-jquery.nicescroll.min.js', get_template_directory_uri().'/assets/js/jquery.nicescroll.min.js', array('jquery'),'1.0',true);    
    wp_enqueue_script( 'tb_sulfur-lightbox.min.js', get_template_directory_uri().'/assets/js/lightbox.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-modernizrr.js', get_template_directory_uri().'/assets/js/modernizrr.js', array('jquery'),'1.0',true);    
    wp_enqueue_script( 'tb_sulfur-owl.carousel.min.js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-slick.min.js', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-styleswitcher.js', get_template_directory_uri().'/assets/js/styleswitcher.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-bootstrap.js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('tb-google-map-api' ,'http://maps.googleapis.com/maps/api/js?sensor=false',array('jquery'));
    wp_enqueue_script( 'tb_sulfur-map.js', get_template_directory_uri().'/assets/js/map.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'tb_sulfur-script.js', get_template_directory_uri().'/assets/js/script.js', array('jquery'),'1.0',true);



	wp_enqueue_script( 'sulfur-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'sulfur-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sulfur_scripts' );

function sulfur_admin_script() {
 wp_enqueue_style( 'tb_sulfur-style.css', get_template_directory_uri().'/assets/css/admin_style.css',null,'1.0');
}
 add_action( 'admin_enqueue_scripts', 'sulfur_admin_script' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


if(file_exists(dirname(__FILE__) . '/lib/ReduxCore/framework.php')){
	require_once(dirname(__FILE__) . '/lib/ReduxCore/framework.php');
}

if(file_exists(dirname(__FILE__) . '/lib/sample/config.php')){
	require_once(dirname(__FILE__) . '/lib/sample/config.php');
}
