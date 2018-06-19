<?php

  // Clean Default Wordpress Head
  function clean_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('set_comment_cookies', 'wp_set_comment_cookies');

    add_filter('the_generator', '__return_false');
    add_filter('show_admin_bar','__return_false');

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
  }

  add_action('after_setup_theme', 'clean_head');

  add_theme_support( 'post-thumbnails' );

  // Direct Media Urls to Parent Page Otherwise 404
  function redirect_template() {
    global $wp_query, $post;

    if ( is_attachment() ) {
      $post_parent = $post->post_parent;

      if ( $post_parent ) {
        wp_redirect( get_permalink($post->post_parent), 301 );
        exit;
      }

      $wp_query->set_404();

      return;
    }

    if ( is_author() || is_date() ) {
      $wp_query->set_404();
    }
  }

  add_action( 'template_redirect', 'redirect_template' );

  // Remove Default Scripts
  function remove_default_scripts() {
    if ( !is_admin() ) {
      wp_deregister_script('jquery');
      wp_deregister_script('wp-embed');
    }
  }

  add_action( 'wp_enqueue_scripts', 'remove_default_scripts' );

  // Register Menus
  function register_menus() {
    register_nav_menus(
      array(
        'golf-menu' => __( 'Golf Menu' ),
        'wedding-menu' => __( 'Wedding Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }

  add_action( 'init', 'register_menus' );

  // Remove Admin Menu Items
  function my_remove_menu_pages() {
    remove_menu_page( 'edit-comments.php' );
  };

  add_action( 'admin_menu', 'my_remove_menu_pages' );

  // Add Custom ACF Options Pages
  if( function_exists('acf_add_options_page') ) {
  	acf_add_options_page(array(
  		'page_title' 	=> 'Theme General Settings',
  		'menu_title'	=> 'Theme Settings',
  		'menu_slug' 	=> 'theme-general-settings',
  		'capability'	=> 'edit_posts',
  		'redirect'		=> false
  	));

  	acf_add_options_sub_page(array(
  		'page_title' 	=> 'Theme Header Settings',
  		'menu_title'	=> 'Header',
  		'parent_slug'	=> 'theme-general-settings',
  	));

  	acf_add_options_sub_page(array(
  		'page_title' 	=> 'Theme Footer Settings',
  		'menu_title'	=> 'Footer',
  		'parent_slug'	=> 'theme-general-settings',
  	));
  }

  function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyDgqTvVptoUA_nvK3Nw3gzRDRuEZrOAxmw');
}

add_action('acf/init', 'my_acf_init');

  // Load Theme Specific Scripts & Styles
  function load_scripts_and_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/_assets/css/normalize.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/_assets/css/bootstrap.css');
    wp_enqueue_style( 'tether', get_template_directory_uri() . '/_assets/css/tether.css');
    wp_enqueue_style( 'lightcase', get_template_directory_uri() . '/_assets/css/lightcase.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/_assets/css/main.css');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/_assets/js/jquery.js', '', '', true);
    wp_enqueue_script('tether', get_template_directory_uri() . '/_assets/js/tether.js', '', '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/_assets/js/bootstrap.js', '', '', true);
    wp_enqueue_script('lightcase', get_template_directory_uri() . '/_assets/js/lightcase.js', '', '', true);

  }

  add_action( 'wp_enqueue_scripts', 'load_scripts_and_styles' );

?>
