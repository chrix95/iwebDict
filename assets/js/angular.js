(function(){
  // create a directive
  var app = angular.module("myApp", []);

  // creates a controller called MainCtrl
  app.controller('MainCtrl', ['$scope','$http', function($scope, $http) {

    // function called if search() is successful
    var onSuccess = function(response){
      $scope.messages = response.data;
      console.log($scope.messages);
    }

    // function called if search() is fails
    var onError = function(response) {
      $scope.error = "Could not fetch data";
      console.log(response);
    }

    // function called once the form is submitted
    $scope.all = function() {
      var promise = $http({
        method: 'POST',
        url: 'script.php',
        data: {
          all: true,
          religion: '',
          family: '',
          market: '',
          relationship: '',
          animal: '',
          kitchen: ''
        }
      });
      promise.then(onSuccess, onError);
    };

    $scope.religion = function() {
      var promise = $http({
        method: 'POST',
        url: 'script.php',
        data: {
          all: '',
          religion: true,
          family: '',
          market: '',
          relationship: '',
          animal: '',
          kitchen: ''
        }
      });
      promise.then(onSuccess, onError);
    };

    $scope.market = function() {
      var promise = $http({
        method: 'POST',
        url: 'script.php',
        data: {
          all: '',
          religion: '',
          family: '',
          market: true,
          relationship: '',
          animal: '',
          kitchen: ''
        }
      });
      promise.then(onSuccess, onError);
    };

    $scope.family = function() {
      var promise = $http({
        method: 'POST',
        url: 'script.php',
        data: {
          all: '',
          religion: '',
          family: true,
          market: '',
          relationship: '',
          animal: '',
          kitchen: ''
        }
      });
      promise.then(onSuccess, onError);
    };

    $scope.relationship = function() {
      var promise = $http({
        method: 'POST',
        url: 'script.php',
        data: {
          all: '',
          religion: '',
          family: '',
          market: '',
          relationship: true,
          animal: '',
          kitchen: ''
        }
      });
      promise.then(onSuccess, onError);
    };

    $scope.animal = function() {
      var promise = $http({
        method: 'POST',
        url: 'script.php',
        data: {
          all: '',
          religion: '',
          family: '',
          market: '',
          relationship: '',
          animal: true,
          kitchen: ''
        }
      });
      promise.then(onSuccess, onError);
    };

    $scope.kitchen = function() {
      var promise = $http({
        method: 'POST',
        url: 'script.php',
        data: {
          all: '',
          religion: '',
          family: '',
          market: '',
          relationship: '',
          animal: '',
          kitchen: true
        }
      });
      promise.then(onSuccess, onError);
    };

  }]);

})();
