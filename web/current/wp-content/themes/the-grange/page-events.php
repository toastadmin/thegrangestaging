<?php get_header(); ?>

<?php if(get_the_title($post->post_parent) === 'Golf') : ?>
<?php putRevSlider( 'golf-hero-slider' ); ?>
<?php elseif(get_the_title($post->post_parent) === 'Weddings') : ?>
<?php putRevSlider( 'wedding-hero-slider' ); ?>
<?php endif; ?>

<section id="corporate" class="weddings callout-block callout-three">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('corporate_content'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<section id="celebrations" class="callout-block callout-four">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('celebrations_content'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<?php if(get_the_title($post->post_parent) === 'Golf') : ?>
<section id="make-a-booking" class="golf contact-form">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>BOOK AN APPOINTMENT WITH FUNCTIONS MANAGER</h1>
        <?php echo do_shortcode('[contact-form-7 id="8" title="Contact Form - Golf"]'); ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section> <!-- .contact-form -->
<div id="gallery">
  <?php putRevSlider( 'gallery-golf' ); ?>
</div>
<?php elseif(get_the_title($post->post_parent) === 'Weddings') : ?>
<section id="make-a-booking" class="weddings contact-form">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>BOOK AN APPOINTMENT WITH FUNCTIONS MANAGER</h1>
        <?php echo do_shortcode('[contact-form-7 id="161" title="Contact Form - Weddings"]'); ?>
      </div>
    </div>
  </div>
</section>
<div id="gallery">
  <?php putRevSlider( 'gallery-weddings' ); ?>
</div>
<?php endif; ?>

<section id="upcoming-events" class="events-container">
  <div class="container">

    <?php if(get_the_title($post->post_parent) === 'Golf') : ?>

    <div class="row">
      <div class="col-sm-6">
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
      </div> <!-- .col-sm-6 -->
      <div class="col-sm-6">
        <h1>Weekly Clubhouse Events</h1>
        <?php if( have_rows('clubhouse_time_and_event', 'option') ): ?>
      	<ul class="golf-calendar-times">
      	<?php while( have_rows('clubhouse_time_and_event', 'option') ): the_row();
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
      </div> <!-- .col-sm-6 -->
    </div> <!-- .row -->

    <?php elseif(get_the_title($post->post_parent) === 'Weddings') : ?>

      <div class="row">
        <div class="col-sm-6">
          <h1>Upcoming Wedding Events</h1>
        </div> <!-- .col-sm-6 -->
      </div> <!-- .row -->
    <?php endif; ?>

    <div class="row">
      <div class="col-xs-12 events-wrap" style="font-family:'americana', serif;font-size:14px;">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div> <!-- .col-xs-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<section class="events-footer" style="background-image:url('<?php the_field('footer_background'); ?>')">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_field('footer_copy'); ?>
      </div>
    </div>
  </div>
</section>

<script>
  jQuery('.date-number').each(function() {
    if (parseInt($(this).text()) < 10) {
      $(this).text('0' + $(this).text());
    };
  });
</script>

<?php get_footer(); ?>
