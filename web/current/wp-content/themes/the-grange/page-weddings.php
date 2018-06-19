<?php get_header(); ?>

<?php putRevSlider( 'wedding-hero-slider' ); ?>

<section id="ceremonies" class="weddings callout-block callout-one">
  <div id="monogram-callout"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('callout_one'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<section id="receptions" class="weddings callout-block callout-two" style="background-image:url(<?php the_field('callout_two_background'); ?>) !important;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('callout_two'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<section id="meet-specialist" class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('content'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
    <div class="row page-link-row">
      <div class="col-xs-12">
        <div class="page-link-grid">
          <?php
            $args = array(
              'post_parent' => $post->ID,
              'post_type' => 'page',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'offset' => 7
            );

            $child_query = new WP_Query( $args );
          ?>

          <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="page-links" title="<?php the_title(); ?>">
              <?php the_post_thumbnail(); ?>
              <span class="link-title"><?php the_title(); ?></span>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div> <!-- .row -->
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<div id="gallery">
<?php putRevSlider( 'weddings-content-slider' ); ?>
</div>

<section id="tour-and-taste" class="weddings callout-block callout-three">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('callout_three'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<?php get_footer(); ?>
