<?php 
  $lat = get_post_meta(get_the_ID(), 'lat', true);
  $long = get_post_meta(get_the_ID(), 'long', true);
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section id="page-title">
  <div class="white-bar"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-title-text">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="page-content" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="contact-section clearfix">
          <h4>Send a Message</h4>
          <div id="quote-form" class="quote-form">
            <div class="form-content dark" ng-controller="FormCtrl">
              <div>
                <form name="contactForm" ng-submit="submit(contactForm.$valid)" class="form" role="form" novalidate>
                  <fieldset>
                    <label for="name">Your Name</label>
                    <input id="name" name="name" ng-model="formData.name" type="text" required>
                  </fieldset>
                  <fieldset>
                    <label for="email">E-mail Address</label>
                    <input id="email" name="email" ng-model="formData.email" type="email" required>
                  </fieldset>
                  <fieldset>
                    <label for="phone">Your Phone Number</label>
                    <input id="phone" name="phone" ng-model="formData.phone" type="text" required>
                  </fieldset>
                  <fieldset>
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" ng-model="formData.message" required></textarea>
                  </fieldset>
                  <fieldset>
                    <button class="my-btn btn-1" type="submit">Get a free quote</button>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="contact-section clearfix">
          <h4><?php the_title(); ?></h4>
          <?php the_content(); ?>
        </div>
        <div class="contact-section clearfix">
          <h4>Become a Fan</h4>
          <a href="https://www.facebook.com/lmquality" target="_blank" class="social social-fb pull-left"><span><i class="fa fa-facebook"></i></span></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="contact-section fb-like clearfix">
          <h4>Find us on facebook</h4>
          <div><?php get_template_part('facebook-like'); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?if ($lat && $long): ?>
<section id="map">
  <div gmap lat="<?php echo $lat; ?>" lng="<?php echo $long; ?>"></div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php get_footer(); ?>