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
        </div>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>