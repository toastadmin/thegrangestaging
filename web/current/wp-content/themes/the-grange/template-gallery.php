<?php
/**
 * Template Name: Gallery
 *
 * @package WordPress
 * @subpackage The Grange
 * @since The Grange v1.0
 */

 get_header(); ?>

 <section class="gallery">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <?php the_content(); ?>
   <?php endwhile; else: ?>
     <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
   <?php endif; ?>
 </section>
 <section class="gallery-nav">
   <div class="container-fluid">
     <?php if(get_the_title($post->post_parent) === 'Golf') : ?>
       <div class="col-sm-4" style="padding-right: 0;">
         <a href="/golf/gallery-corporate" style="background:url(<?php the_field('corporate', 'options') ?>);"><span>CORPORATE</span></a>
       </div>
       <div class="col-sm-4" style="">
         <a href="/golf/gallery-celebrations" style="background:url(<?php the_field('events', 'options') ?>);"><span>EVENTS</span></a>
       </div>
       <div class="col-sm-4" style="">
         <a href="/weddings/gallery-weddings" style="background:url(<?php the_field('weddings', 'options') ?>);"><span>WEDDINGS</span></a>
       </div>
     <?php elseif(get_the_title($post->post_parent) === 'Weddings') : ?>
       <div class="col-sm-4" style="">
         <a href="/weddings/gallery-celebrations" style="background:url(<?php the_field('events', 'options') ?>);"><span>EVENTS</span></a>
       </div>
       <div class="col-sm-4" style="padding-right: 0;">
         <a href="/weddings/gallery-corporate" style="background:url(<?php the_field('corporate', 'options') ?>);"><span>CORPORATE</span></a>
       </div>
       <div class="col-sm-4" style="">
         <a href="/golf/gallery-golf" style="background:url(<?php the_field('golf', 'options') ?>);"><span>GOLF</span></a>
       </div>
    <?php endif; ?>
   </div>
 </section>
 <?php get_footer(); ?>
