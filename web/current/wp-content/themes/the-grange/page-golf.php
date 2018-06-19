<?php get_header(); ?>

<?php putRevSlider( 'golf-hero-slider' ); ?>

<section id="about" class="golf callout-block callout-one">
  <div id="monogram-callout"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('callout_one'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<section id="golf-course" class="page-content">
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

<?php putRevSlider( 'golf-content-slider' ); ?>

<section class="golf callout-block callout-two">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('callout_two'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<section id="lessons" class="golf callout-block callout-three">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('callout_three'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<section id="event-calendar" class="golf event-info">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
          <a href="/events">view full golf programme</a>
          <h1>Weekly Golf Calendar</h1>
          <?php if( have_rows('golf_time_and_event', 'option') ): ?>
        	<ul class="golf-calendar-times">
        	<?php while( have_rows('golf_time_and_event', 'option') ): the_row();
        		// vars
        		$time = get_sub_field('time');
        		$event = get_sub_field('event');
        	?>
        		<li>
              <span class="time"><?php echo $time; ?></span>
              <span class="event"><?php echo $event; ?></span>
            </li>
        	<?php endwhile; ?>
        	</ul>
          <?php endif; ?>
          <a href="http://thegrange.miclub.com.au/cms/online-public-bookings/" class="booking-form" target="_blank">booking form</a>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<div id="gallery">
  <?php putRevSlider( 'gallery-golf' ); ?>
</div>

<?php get_footer(); ?>
