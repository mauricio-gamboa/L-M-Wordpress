<div id="quote-form" class="quote-form">
  <div class="form-content dark" ng-controller="ContactCtrl" ng-init="setRoot('<?php bloginfo('template_directory'); ?>')">
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