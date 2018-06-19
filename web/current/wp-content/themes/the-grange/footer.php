    <footer>
      <div class="container">
        <img class="pull-xs-left" src="<?php echo get_template_directory_uri(); ?>/_assets/img/logo-footer.png" />
        <div class="flex-wrap">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
          <a class="contact-number" href="tel:<?php the_field('contact_number', 'options'); ?>" target="_blank"><?php the_field('contact_number', 'options'); ?></a>
          <ul class="social-links">
            <li><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="<?php the_field('pinterest', 'options'); ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div> <!-- .container -->
    </footer>
    <?php wp_footer(); ?>
    <script>
      jQuery.noConflict();
      (function( $ ) {
        $(function() {
          $('.current-menu-item').siblings('.current-page-ancestor').css('text-decoration', 'none');
          <?php if(get_the_title($post->post_parent) === 'Weddings') : ?>
            $('footer').css('background', '#393d3f');
            $('.social-links a').css('color', '#393d3f');
          <?php endif; ?>

          <?php if ( !wp_is_mobile() ) : ?>

            $(window).scroll(function() {
              var scrollPos = $(this).scrollTop();
              if(scrollPos > 245) {
                $('header').addClass('sticky');
              } else {
                $('header').removeClass('sticky');
              }
            });

          <?php endif; ?>

          $('#mobile-trigger').click(function() {
            $(this).stop(true, true).fadeOut();
            $('#mobile-close').stop(true, true).fadeIn();
            $('#mobile-nav').css({
              display: 'flex',
              opacity: 0
            }).stop(true, true).animate({
              opacity: 1
            }, 250);
          })

          $('.golf-drop-trigger').mouseenter(function() {
            $('#golf-drop').stop(true, true).fadeIn(250);
          });

          $('.golf-drop-trigger').click(function() {
            $('#golf-drop').stop(true, true).fadeToggle(250);
          });

          $('#golf-drop').mouseleave(function() {
            $(this).stop(true, true).fadeOut(250);
          });

          $('.evcal_month_line').siblings('#evcal_list').hide();

          $('.evcal_month_line').click(function(){
            $(this).next('#evcal_list').slideToggle();
          })

          $('#mobile-close').click(function() {
            $(this).stop(true, true).fadeOut();
            $('#mobile-trigger').stop(true, true).fadeIn();
            $('#mobile-nav').stop(true, true).fadeOut();
          });
        });
      })(jQuery);
    </script>
  </body>
</html>
