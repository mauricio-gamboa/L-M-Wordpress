  <section id="quote">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="quote-text">
            <h2>Are you looking for a repair but want a quote first?</h2>
            <p>We will respond to you within the next 24 hours</p>
          </div>
          <?php if(is_page('contact-us')): ?>
          <a href="#page-title" du-smooth-scroll class="my-btn btn-1">Get a free quote</a>
          <?php else: ?>
          <a href="#quote-form" du-smooth-scroll class="my-btn btn-1 hide-s hide-xs">Get a free quote</a>
          <a href="#quote-form-small" du-smooth-scroll class="my-btn btn-1 show-s">Get a free quote</a>
          <a href="#quote-form-xs" du-smooth-scroll class="my-btn btn-1 show-xs">Get a free quote</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer">
    <section id="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
            <h1 class="logo white"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php get_template_part('mailchimp-form'); ?>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-offset-1 col-md-3 col-lg-offset-4 col-lg-2">
            <div class="social-wrapper">
              <h6>We are social</h6>
              <a href="https://www.facebook.com/lmquality" target="_blank" class="social social-fb"><span><i class="fa fa-facebook"></i></span> Become a Fan</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="footer-bottom-text">
              &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> Inc. All Rights Reserved.
              <?php wp_nav_menu(array( 'menu' => 'footer-menu', 'container' => false, 'menu_class' => 'list-unstyled', 'link_after' => '<span></span>')); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>