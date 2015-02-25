'use strict';

var myApp = angular.module('LM', ['duScroll']);

myApp.directive('owlSingle', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      element.owlCarousel({
        autoPlay: true,
        singleItem: true
      });
    }
  };
}]);

myApp.directive('owlBrands', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      element.owlCarousel({
        items: 6,
        autoPlay: true,
        pagination: false
      });
    }
  };
}]);

myApp.directive('owlServices', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      element.owlCarousel({
        autoPlay: true
      });
    }
  };
}]);

myApp.directive('selectFile', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      var trigger = element.find('.my-btn');
      var file = element.find('input[type="file"]');

      trigger.on('click', function(e) {
        e.preventDefault();
        file.trigger('click');
      });
    }
  };
}]);

myApp.controller('FormCtrl', ['$scope', '$log', function($scope, $log) {
  $scope.formData = {};

  $scope.submit = function (isValid) {
    if (isValid) $log.log($scope.formData);
  };
}]);

myApp.directive('gmap', [function () {
  return {
    restrict: 'A',

    link: function (scope, element, attrs, controller) {
      var lat = attrs.lat * 1;
      var lng = attrs.lng * 1;
      var map_canvas = element[0];
      
      var latlng = new google.maps.LatLng(lat, lng);

      var map_options = {
        zoom: 15,
        center: latlng,
        scrollwheel: false,
        scaleControl: false,
        streetViewControl: false,
        draggable: true,
        mapTypeControl: false,
        zoomControl: false,
        panControl: false
      };

      var map = new google.maps.Map(map_canvas, map_options);

      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
    }
  };
}]);