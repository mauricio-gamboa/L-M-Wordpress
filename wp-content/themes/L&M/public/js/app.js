'use strict';

var myApp = angular.module('LM', ['duScroll', 'checklist-model']);

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

    quote: function(data, root, successCallback, errorCallback) {
      var fd = new FormData();
      fd.append('name', data.name);
      fd.append('email', data.email);
      fd.append('phone', data.phone);
      fd.append('userfile', data.userfile);

      if (data.products && data.products.length) {
        var products = '';
        
        angular.forEach(data.products, function (product, key) {
          if (data.products.length == (key + 1))
            products += product;
          else
            products += product + ', ';
        });

        fd.append('products', products);
      }

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
    },

    contact: function(data, root, successCallback, errorCallback) {
      $http({
        method: 'POST',
        url: root + '/process_contact.php',
        data: $.param(data),
        headers : { 
          'Content-Type': 'application/x-www-form-urlencoded'
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

myApp.controller('ContactCtrl', ['$scope', '$log', 'submitService', function($scope, $log, submitService) {
  $scope.formData = {};

  $scope.showSuccess = false;
  $scope.showError = false;

  $scope.submit = function (isValid) {
    if (isValid && $scope.root) submitService.contact($scope.formData, $scope.root, $scope.successCallback, $scope.errorCallback);
  };

  $scope.successCallback = function (data) {
    if (data.success) {
      $scope.showSuccess = true;
      $scope.showError = false;
    } else {
      $scope.showSuccess = false;
      $scope.showError = true;
    }

    $scope.formData = {};
    $scope.contactForm.$setPristine();
  };

  $scope.errorCallback = function (data) {
    $scope.showSuccess = false;
    $scope.showError = true;
    $scope.formData = {};
    $scope.contactForm.$setPristine();
  };

  $scope.setRoot = function (root) {
    if (root) $scope.root = root;
  };
}]);

myApp.controller('QuoteCtrl', ['$scope', '$log', 'submitService', function($scope, $log, submitService) {
  $scope.formData = {};

  $scope.products = ['High efficiency boiler', 'High efficiency furnace', 'Gas lines', 'Air Conditioning', 'Fireplace', 'Unit heaters'];

  $scope.showSuccess = false;
  $scope.showError = false;

  $scope.submit = function (isValid) {
    $scope.showSuccess = false;
    $scope.showError = false;
    if (isValid && $scope.root) submitService.quote($scope.formData, $scope.root, $scope.successCallback, $scope.errorCallback);
  };

  $scope.successCallback = function (data) {
    if (data.success) {
      $scope.showSuccess = true;
      $scope.showError = false;
    } else {
      $scope.showSuccess = false;
      $scope.showError = true;
    }

    $scope.formData = {};
    $scope.quoteForm.$setPristine();
  };

  $scope.errorCallback = function (data) {
    $scope.showSuccess = false;
    $scope.showError = true;
    $scope.formData = {};
    $scope.quoteForm.$setPristine();
  };

  $scope.setRoot = function (root) {
    if (root) $scope.root = root;
  };
}]);