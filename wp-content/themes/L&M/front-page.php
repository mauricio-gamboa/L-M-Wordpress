<?php get_header(); ?>
<section id="header">
  <div class="white-bar"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-text">
          <h2>Quality Plumbing fast &amp; reliable</h2>
          <div class="phone-xs show-xs">CALL 604-879-5301</div>
          <img class="guy show-xs" src="<?php bloginfo('template_directory'); ?>/public/images/guy-xs.png" alt="">
          <div id="quote-form-xs" class="quote-form show-xs">
            <div class="form-header">
              <h4>Need a free Estimate?</h4>
              <h5>let’s get in touch</h5>
            </div>
            <div class="form-content" ng-controller="FormCtrl">
              <img class="bg-form" src="<?php bloginfo('template_directory'); ?>/public/images/bg-form.png" alt="">
              <div>
                <div class="contact-person">
                  Contact us using the form below or call <br>Kevin at <strong>604-879-5301</strong> for a free quote
                </div>
                <form name="quoteForm" ng-submit="submit(quoteForm.$valid)" class="form" role="form" novalidate>
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
                  <fieldset class="checks">
                    <span>House Plans <span>(Optional)</span></span>
                    <div class="file-wrapper" select-file>
                      <input id="file" name="file" ng-model="formData.file" type="file">
                      <a href="" class="my-btn btn-2"><i class="fa fa-arrow-up"></i> Upload file</a>
                    </div>
                  </fieldset>
                  <fieldset class="checks">
                    <span>Products you are interested in</span>
                    <label for="productA"><input id="productA" name="productA" ng-model="formData.productA" type="checkbox"> Sollicitudin</label>
                    <label for="productB"><input id="productB" name="productB" ng-model="formData.productB" type="checkbox"> Malesuada</label>
                    <label for="productC"><input id="productC" name="productC" ng-model="formData.productC" type="checkbox"> Bibendum</label>
                    <label for="productD"><input id="productD" name="productD" ng-model="formData.productD" type="checkbox"> Praesent</label>
                  </fieldset>
                  <fieldset>
                    <button class="my-btn btn-1" type="submit">Get a free quote</button>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <p class="hide-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae odio blandit, aliquam felis et, tincidunt tortor. Donec a quam ac nibh tincidunt mattis. Aliquam sed bibendum velit.</p>
          <span class="phone-literal hide-xs">call <br class="show-s" /> 604-879-5301</span>
        </div>
        <img class="guy hide-xs" src="<?php bloginfo('template_directory'); ?>/public/images/guy.png" alt="">
      </div>
    </div>
  </div>
  <section id="header-services">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <div class="service-wrapper list-unstyled hide-xs">
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
        <div class="content">
          <h3>Phasellus eget efficitur sapien</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae odio blandit, aliquam felis et, tincidunt tortor. Donec a quam ac nibh tincidunt mattis. Aliquam sed bibendum velit. Praesent eget porttitor est, et molestie nisl. Sed viverra felis augue, ut commodo orci scelerisque eu. Pellentesque nec sapien eu est fermentum volutpat vel ut nulla. Etiam et leo interdum, pharetra est in, accumsan augue. Pellentesque suscipit rhoncus interdum. Aliquam sed nisl vitae mi facilisis imperdiet. Praesent rutrum vulputate tellus, vel ultrices risus imperdiet ut. Nulla lacinia tincidunt pharetra. Nunc bibendum fringilla nisi, nec egestas massa venenatis at. Aliquam dictum at libero quis malesuada. Nam eget feugiat nibh. Morbi at est nec orci efficitur ultrices non vitae tellus.</p>
          <h3>Vivamus nec malesuada</h3>
          <p>Phasellus a aliquam orci, sit amet venenatis turpis. Donec nec bibendum felis. Maecenas efficitur tincidunt ante non maximus. Etiam viverra aliquam ipsum vitae rutrum. In hac habitasse platea dictumst. Nulla pellentesque euismod nibh, bibendum gravida lectus pellentesque aliquet. Vivamus libero leo, consequat sed porttitor nec, bibendum a quam. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod orci felis, molestie blandit dui euismod nec. In et vestibulum velit. Sed lectus neque, varius vel dignissim vitae, luctus vitae urna. Aliquam molestie faucibus orci vel ullamcorper. Donec ac tellus pellentesque, scelerisque sem non, tristique turpis.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 hide-xs">
        <div id="quote-form-small" class="quote-form">
          <div class="form-header show-s">
            <h4>Need a free Estimate?</h4>
            <h5>let’s get in touch</h5>
          </div>
          <div class="form-content" ng-controller="FormCtrl">
            <img class="bg-form" src="<?php bloginfo('template_directory'); ?>/public/images/bg-form.png" alt="">
            <div>
              <div class="contact-person">
                Contact us using the form below or call <br>Kevin at <strong>604-879-5301</strong> for a free quote
              </div>
              <form name="quoteForm" ng-submit="submit(quoteForm.$valid)" class="form" role="form" novalidate>
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
                <fieldset class="checks">
                  <span>House Plans <span>(Optional)</span></span>
                  <div class="file-wrapper" select-file>
                    <input id="file" name="file" ng-model="formData.file" type="file">
                    <a href="" class="my-btn btn-2"><i class="fa fa-arrow-up"></i> Upload file</a>
                  </div>
                </fieldset>
                <fieldset class="checks">
                  <span>Products you are interested in</span>
                  <label for="productA"><input id="productA" name="productA" ng-model="formData.productA" type="checkbox"> Sollicitudin</label>
                  <label for="productB"><input id="productB" name="productB" ng-model="formData.productB" type="checkbox"> Malesuada</label>
                  <label for="productC"><input id="productC" name="productC" ng-model="formData.productC" type="checkbox"> Bibendum</label>
                  <label for="productD"><input id="productD" name="productD" ng-model="formData.productD" type="checkbox"> Praesent</label>
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
  </div>
</section>
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
        <h3>Commercial Services</h3>
        <ul class="list-unstyled">
          <li>Molestie blandit dui euismod nec</li>
          <li>Molestie blandit dui euismod nec</li>
          <li>Molestie blandit dui euismod nec</li>
          <li>Molestie blandit dui euismod nec</li>
          <li>Molestie blandit dui euismod nec</li>
          <li>Molestie blandit dui euismod nec</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-offset-2 col-sm-5 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
        <div class="testimonials-slider owl-carousel" owl-single>
          <div class="testimonial">
            <blockquote>
              <p>Nullam sollicitudin, justo sit amet dictum maximus, risus magna sollicitudin orci, sit amet posuere lacus neque a diam. Suspendisse eros elit, sodales commodo diam a, pharetra eleifend sapien.</p>
            </blockquote>
            <p><cite>Suspendisse Eros</cite></p>
          </div>
          <div class="testimonial">
            <blockquote>
              <p>Nullam sollicitudin, justo sit amet dictum maximus, risus magna sollicitudin orci, sit amet posuere lacus neque a diam. Suspendisse eros elit, sodales commodo diam a, pharetra eleifend sapien.</p>
            </blockquote>
            <p><cite>Suspendisse Eros</cite></p>
          </div>
          <div class="testimonial">
            <blockquote>
              <p>Nullam sollicitudin, justo sit amet dictum maximus, risus magna sollicitudin orci, sit amet posuere lacus neque a diam. Suspendisse eros elit, sodales commodo diam a, pharetra eleifend sapien.</p>
            </blockquote>
            <p><cite>Suspendisse Eros</cite></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/guy-2.png" alt="" class="guy hide-xs">
</section>
<section id="why-choose-us">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
        <h3>Why Choose Us?</h3>
        <ul class="list-unstyled why-list">
          <li class="why-1"><span></span>100% Satisfactory Guarantee</li>
          <li class="why-2"><span></span>Fixed Right or your Money back</li>
          <li class="why-3"><span></span>Free Inspections</li>
          <li class="why-4"><span></span>Fully Insured</li>
          <li class="why-5"><span></span>Fully Licensed Professionals</li>
          <li class="why-6"><span></span>Up-Front Pricing</li>
          <li class="why-7"><span></span>Experienced</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="facebook-plugin">
          <img src="<?php bloginfo('template_directory'); ?>/public/images/facebook-like.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section id="brands">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="brands-wrapper">
          <h3>Brands we use</h3>
          <div class="brands-slider owl-carousel" owl-brands>
            <div class="brands-slide"><img src="<?php bloginfo('template_directory'); ?>/public/images/brands-1.png" alt=""></div>
            <div class="brands-slide"><img src="<?php bloginfo('template_directory'); ?>/public/images/brands-2.png" alt=""></div>
            <div class="brands-slide"><img src="<?php bloginfo('template_directory'); ?>/public/images/brands-3.png" alt=""></div>
            <div class="brands-slide"><img src="<?php bloginfo('template_directory'); ?>/public/images/brands-4.png" alt=""></div>
            <div class="brands-slide"><img src="<?php bloginfo('template_directory'); ?>/public/images/brands-5.png" alt=""></div>
            <div class="brands-slide"><img src="<?php bloginfo('template_directory'); ?>/public/images/brands-6.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>