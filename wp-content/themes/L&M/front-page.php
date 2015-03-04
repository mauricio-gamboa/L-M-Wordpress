<?php $home_content_page = get_my_page('home-content'); ?>
<?php $commercial_services_page = get_my_page('commercial-services'); ?>
<?php $why_choose_us_page = get_my_page('why-choose-us'); ?>
<?php $brands = get_my_post_type('brand'); ?>
<?php $testimonials = get_my_post_type('testimonial'); ?>
<?php $services = get_my_post_type('service'); ?>

<?php get_header(); ?>
<section id="header">
  <div class="white-bar"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php if($home_content_page): ?>
        <?php foreach ( $home_content_page as $key=>$post ) : setup_postdata( $post ); ?>
        <div class="header-text">
          <h2><?php the_title(); ?></h2>
          <div class="phone-xs show-xs">CALL 604-879-5301</div>
          <img class="guy show-xs" src="<?php bloginfo('template_directory'); ?>/public/images/guy-xs.png" alt="">
          <div id="quote-form-xs" class="quote-form show-xs">
            <div class="form-header">
              <h4>Need a free Estimate?</h4>
              <h5>let’s get in touch</h5>
            </div>
            <?php get_template_part('quote-form'); ?>
          </div>
          <p class="hide-xs">
            <?php echo get_the_excerpt(); ?>
          </p>
          <span class="phone-literal hide-xs">call <br class="show-s" /> 604-879-5301</span>
        </div>
        <img class="guy hide-xs" src="<?php bloginfo('template_directory'); ?>/public/images/guy.png" alt="">
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
  <section id="header-services">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          
          <?php if($services): ?>
          <div class="service-wrapper list-unstyled hide-xs">
            <?php foreach ( $services as $key=>$post ) : setup_postdata( $post ); ?>
            <div class="service">
              <span class="services-icon">
                <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
              </span>
              <h5><?php the_title(); ?></h5>
              <?php the_content(); ?>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>
          
          <div class="show-xs">
            <div class="service-wrapper list-unstyled owl-carousel" owl-services>
              <div class="service">
                <span class="services-icon icon-1"></span>
                <h5>PLUMBInG</h5>
                <p>Onec a quam ac nibh tdunt mattis.</p>
              </div>
              <div class="service">
                <span class="services-icon icon-2"></span>
                <h5>Heating</h5>
                <p>Onec a quam ac nibh tdunt mattis.</p>
              </div>
              <div class="service">
                <span class="services-icon icon-3"></span>
                <h5>Air Conditioning</h5>
                <p>Onec a quam ac nibh tdunt mattis.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hide-s hide-xs">
          <div id="quote-form" class="quote-form">
            <div class="form-header">
              <h4>Need a free Estimate?</h4>
              <h5>let’s get in touch</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/phone.png" alt="" class="phone hide-s hide-xs">
  <img src="<?php bloginfo('template_directory'); ?>/public/images/phone-s.png" alt="" class="phone show-s hide-xs">
</section>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
        <?php if($home_content_page): ?>
        <div class="content">
          <?php foreach ( $home_content_page as $key=>$post ) : setup_postdata( $post ); ?>
          <?php the_content(); ?>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 hide-xs">
        <div id="quote-form-small" class="quote-form">
          <div class="form-header show-s">
            <h4>Need a free Estimate?</h4>
            <h5>let’s get in touch</h5>
          </div>
          <?php get_template_part('quote-form'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="services">
  <div class="container">
    <div class="row">
      
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
        <?php if($commercial_services_page): ?>
        <?php foreach ( $commercial_services_page as $key=>$post ) : setup_postdata( $post ); ?>
        <h3><?php the_title (); ?></h3>
        <?php the_content(); ?>
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      
      <div class="col-xs-12 col-sm-offset-2 col-sm-5 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
        <?php if($testimonials): ?>
        <div class="testimonials-slider owl-carousel" owl-single>
          <?php foreach ( $testimonials as $key=>$post ) : setup_postdata( $post ); ?>
          <div class="testimonial">
            <blockquote>
              <?php the_content(); ?>
            </blockquote>
            <p><cite><?php the_title(); ?></cite></p>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>

  </div>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/guy-2.png" alt="" class="guy hide-xs">
</section>
<section id="why-choose-us">
  <div class="container">
    <div class="row">
      <?php if($why_choose_us_page): ?>
      <?php foreach ( $why_choose_us_page as $key=>$post ) : setup_postdata( $post ); ?>
      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8" add-span>
        <h3>Why Choose Us?</h3>
        <?php the_content(); ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
      <?php endif; ?>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="facebook-plugin">
          <div><?php get_template_part('facebook-like'); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if($brands): ?>
<section id="brands">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="brands-wrapper">
          <h3>Brands we use</h3>
          <div class="brands-slider owl-carousel" owl-brands>
            <?php foreach ( $brands as $key=>$post ) : setup_postdata( $post ); ?>
              <div class="brands-slide"><?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?></div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>