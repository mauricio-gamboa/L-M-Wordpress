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

myApp.directive('addSpan', [function () {
  return {
    restrict: 'A',

    link: function (scope, element) {
      var lis = element.find('li');
      angular.forEach(lis, function(li, key) {
        $(li).addClass('why-' + (key + 1)).prepend('<span></span>');
      });
    }
  };
}]);

myApp.directive('fileModel', ['$parse', function ($parse) {
  return {
    restrict: 'A',

    link: function (scope, element, attrs) {
      var model = $parse(attrs.fileModel);
      var modelSetter = model.assign;

      element.bind('change', function(){
        scope.$apply(function(){
          modelSetter(scope, element[0].files[0]);
        });
      });
    }
  };
}]);

myApp.factory('submitService', ['$http', function($http) {
  return {

    getQuote: function(data, root, successCallback, errorCallback) {
      var fd = new FormData();
      fd.append('name', data.name);
      fd.append('email', data.email);
      fd.append('phone', data.phone);
      fd.append('userfile', data.userfile);

      $http.post(root + '/process_quote.php', fd, {
        transformRequest: angular.identity,
        headers: {
          'Content-Type': undefined
        }
      })

      .success(function(data, status, headers, config) {
        successCallback(data, status, headers, config);
      })

      .error(function(data, status, headers, config) {
        errorCallback(data, status, headers, config);
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

myApp.controller('QuoteCtrl', ['$scope', '$log', 'submitService', function($scope, $log, submitService) {
  $scope.formData = {};

  $scope.submit = function (isValid) {
    if (isValid && $scope.root) submitService.getQuote($scope.formData, $scope.root, $scope.successCallback, $scope.errorCallback);
  };

  $scope.successCallback = function (data) {
    $log.log(data);
  };

  $scope.errorCallback = function (data) {
    $log.log(data);
  };

  $scope.setRoot = function (root) {
    if (root) $scope.root = root;
  };
}]);