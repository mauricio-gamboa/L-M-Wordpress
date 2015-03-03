<section id="page-title" class="pad about">
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

<section id="page-content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
        <div class="content">
          <?php the_content(); ?>

          <?php if(is_page('about')): ?>
          <?php $why_choose_us_page = get_my_page('why-choose-us'); ?>
          <?php if($why_choose_us_page): ?>
          <?php foreach ( $why_choose_us_page as $key=>$post ) : setup_postdata( $post ); ?>
          <div add-span>
            <h3>Why Choose Us?</h3>
            <?php the_content(); ?>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>