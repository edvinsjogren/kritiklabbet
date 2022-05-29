<?php
/**
 * Brainforest functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Brainforest
 */

if ( ! function_exists( 'brainforest_setup' ) ) :

function brainforest_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on Brainforest, use a find and replace
   * to change 'brainforest' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'brainforest', get_template_directory() . '/languages' );

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
    'primary' => esc_html__( 'Primary', 'brainforest' ),
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
  add_theme_support( 'custom-background', apply_filters( 'brainforest_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif;
add_action( 'after_setup_theme', 'brainforest_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brainforest_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'brainforest_content_width', 640 );
}
add_action( 'after_setup_theme', 'brainforest_content_width', 0 );


/**
 * add image size.
 */
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
  add_image_size( 'nyhet', 720, 480, true );
  add_image_size( 'lista', 344, 224, true );
}

function brainforest_scripts() {
  wp_enqueue_style( 'brainforest-style', get_stylesheet_uri() );
  wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAHfjrLZ3mBzSRw9HNInW_8WXQV8yjeTYM', array(), '3', true );

  wp_deregister_script('jquery');

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'brainforest_scripts' );

/**
 * Add ACF "Options"-page
 */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' 	=> 'Temainställningar',
    'menu_title'	=> 'Temainställningar',
    'menu_slug' 	=> 'theme-options',
    'capability'	=> 'edit_posts',
    'parent_slug' => '',
    'position'    => false,
    'icon_url'    => false,
    'redirect'		=> false
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Kontaktuppgifter',
    'menu_title'	=> 'Kontaktuppgifter',
    'menu_slug' 	=> 'theme-options-Contact',
    'capability'	=> 'edit_posts',
    'parent_slug' => 'theme-options',
    'position'    => false,
    'icon_url'    => false
  ));
}

function wpdocs_custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
  return '..'.'<br>'.'<a class="more-link" href="' . get_permalink() . '">Läs mer</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'footer_lvl_1',
    'id'            => 'footer_lvl_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="rounded">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'footer_lvl_2',
    'id'            => 'footer_lvl_2',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="rounded">',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Register the Custom Navigation Walker
 */
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';