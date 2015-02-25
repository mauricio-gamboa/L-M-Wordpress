<!DOCTYPE html>
<html lang="en" ng-app="LM">
<head>
  <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <section id="contact" class="hide-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <div class="contact">
            <div>
              <a href=""><img src="<?php bloginfo('template_directory'); ?>/public/images/facebook-share.png" alt=""></a>
            </div>
            <div class="phone">
              call now
              <span>604-879-5301</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <nav id="nav" class="hide-s hide-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php wp_nav_menu(array( 'header-menu' => 'header-menu', 'container' => false, 'menu_class' => 'list-unstyled')); ?>
        </div>
      </div>
    </div>
  </nav>
  <nav id="nav-mobile" class="show-s show-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="logo logo-xs show-xs pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <span class="menu-trigger collapsed pull-right" data-toggle="collapse" data-target="#nav-menu"><i class="fa fa-bars"></i></span>
          <?php wp_nav_menu(array( 'header-menu' => 'header-menu', 'container' => false, 'menu_class' => 'list-unstyled collapse', 'menu_id' => 'nav-menu')); ?>
        </div>
      </div>
    </div>
  </nav>