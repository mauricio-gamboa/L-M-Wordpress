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
          <?php get_template_part('contact-form'); ?>
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

<section id="map">
  <?if ($lat && $long): ?>
  <div gmap lat="<?php echo $lat; ?>" lng="<?php echo $long; ?>"></div>
  <?php else: ?>
  <div>
    <div class="alert alert-danger" role="alert">Please create custom fields called "lat" and "long" in the Contact Us page.</div>
  </div>
  <?php endif; ?>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>