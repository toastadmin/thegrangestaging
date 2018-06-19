<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo get_bloginfo('title') ?> | <?php echo get_bloginfo('description'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/c43f29da27.js"></script>

    <!-- WP_Head -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <?php if (!is_page(2)) : ?>
    <header class="site-header">
      <div class="container-fluid">
        <?php if(is_page(array(10, 149, 171, 'thank-you')) || get_the_title($post->post_parent) === 'Golf') : ?>
        <a id="logo" class="m-x-auto d-block" href="/"><img class="d-block" src="<?php echo get_template_directory_uri(); ?>/_assets/img/logo-header.png" /></a>
        <?php wp_nav_menu( array( 'theme_location' => 'golf-menu' ) ); ?>
        <a class="booking-link golf-drop-trigger">BOOK A TEE TIME <i class="fa fa-search" aria-hidden="true"></i></a>
        <ul id="golf-drop">
          <!--<li><a href="<?php the_field('book_a_tee_time', 'options'); ?>">BOOK A TEE TIME</a></li>-->
          <li><a style="cursor:default;text-decoration:none;" href="javascript:void(0)">BOOK A TEE TIME</a></li>
          <li><a href="<?php the_field('member_login', 'options'); ?>">MEMBER LOGIN</a></li>
          <li><a href="<?php the_field('social_golf', 'options'); ?>">SOCIAL GOLF</a></li>
        </ul>
        <?php elseif(is_page(array(12, 153, 183)) || get_the_title($post->post_parent) === 'Weddings') : ?>
        <a id="logo" class="m-x-auto d-block" href="/"><img class="d-block" src="<?php echo get_template_directory_uri(); ?>/_assets/img/logo-header-wedding.png" /></a>
        <?php wp_nav_menu( array( 'theme_location' => 'wedding-menu' ) ); ?>
        <a class="booking-link" href="<?php the_field('wedding_appointment_location', 'options'); ?>">BOOK AN APPOINTMENT <i class="fa fa-search" aria-hidden="true"></i></a>
        <?php endif; ?>
        <button type="button" id="mobile-trigger"><i class="fa fa-bars" aria-hidden="true"></i></button>
      </div> <!-- .container -->

      <div id="mobile-nav">
        <?php if(is_page(array(10, 149, 171, 'thank-you')) || get_the_title($post->post_parent) === 'Golf') : ?>
        <?php wp_nav_menu( array( 'theme_location' => 'golf-menu' ) ); ?>
        <?php elseif(is_page(array(12, 153, 183)) || get_the_title($post->post_parent) === 'Weddings') : ?>
        <?php wp_nav_menu( array( 'theme_location' => 'wedding-menu' ) ); ?>
        <?php endif; ?>
        <button type="button" id="mobile-close"><i class="fa fa-times" aria-hidden="true"></i></button>
      </div>

    </header>
    <div class="bg-gradient"></div>
    <?php endif; ?>
