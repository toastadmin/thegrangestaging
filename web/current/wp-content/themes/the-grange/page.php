<?php get_header(); ?>

<section class="hero" style="background-image:url('<?php the_field('image'); ?>')"></section>

<section class="generic-content">
  <div class="container">
    <div class="col-xs-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; else: ?>
        <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
    </div> <!-- .col-xs-12 -->
  </div> <!-- .container -->
</section> <!-- generic-content -->

<?php get_footer(); ?>
