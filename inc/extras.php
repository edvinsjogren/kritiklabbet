<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Brainforest
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function brainforest_body_classes( $classes ) {
  // Adds a class of group-blog to blogs with more than 1 published author.
  if ( is_multi_author() ) {
    $classes[] = 'group-blog';
  }

  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }
  if ( is_tag() ) {
    $tag_classes[] = 'archive archive-tags';
    return $tag_classes;
  }

  return $classes;
}
add_filter( 'body_class', 'brainforest_body_classes' );

/**
 * Custom function to remove the "Resent Comment Style" from the head.
 */
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}
add_action( 'widgets_init', 'my_remove_recent_comments_style' );

function my_acf_init() {

  acf_update_setting('google_api_key', 'AIzaSyAHfjrLZ3mBzSRw9HNInW_8WXQV8yjeTYM');
}

add_action('acf/init', 'my_acf_init');