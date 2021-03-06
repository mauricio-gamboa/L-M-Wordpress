<?php

define('THEME_DIR', get_template_directory_uri());


function enqueue_styles() {
	// Load our main stylesheet.
  wp_register_style('main', get_stylesheet_uri(), array(), '1');
  wp_enqueue_style('main');
  
  wp_register_style('libs', THEME_DIR . '/public/styles/libs.css', array(), '1');
  wp_enqueue_style('libs');

  wp_register_style('custom', THEME_DIR . '/public/styles/styles.css', array(), '1');
  wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
  // Load our main scripts.

  if (is_page('contact-us')) {
    wp_register_script('google_maps', 'https://maps.googleapis.com/maps/api/js', array(), '1', true);
    wp_enqueue_script('google_maps');
  }
  
  wp_register_script('libs', THEME_DIR . '/public/js/min/libs.min.js', array(), '1', true);
  wp_enqueue_script( 'libs' );
  
  wp_register_script('app', THEME_DIR . '/public/js/min/app.min.js', array('libs'), '1', true);
  wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (!function_exists('l_m_setup')) :
  function l_m_setup() {
    if ( function_exists('add_theme_support') ) {
      add_theme_support('post-thumbnails');
    }
    
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
endif;

add_action('init', 'l_m_setup');

function get_my_post_type($postType) {
  global $post;
  $brands = get_posts(array('post_type'=> $postType, 'posts_per_page' => -1));
  return $brands;
}

function get_my_page($pageName) {
  global $post;
  $page = get_posts(array('post_type'=> 'page', 'name' => $pageName, 'posts_per_page' => 1));
  return $page;
}

require get_template_directory() . '/inc/template-tags.php';