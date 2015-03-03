<div id="sidebar">
  <div class="widget">
    <div id="quote-form" class="quote-form">
      <div class="form-header">
        <h4>Need a free Estimate?</h4>
        <h5>let’s get in touch</h5>
      </div>
      <div class="form-content" ng-controller="FormCtrl">
        <img class="bg-form" src="<?php bloginfo('template_directory'); ?>/public/images/bg-form.png" alt="">
        <div>
          <div class="contact-person">
            Contact us using the form below or call <br>Kevin at <strong>306-536-4159</strong> for a free quote
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
  <div class="widget">
    <div class="facebook-plugin">
      <div><?php get_template_part('facebook-like'); ?></div>
    </div>
  </div>
</div>