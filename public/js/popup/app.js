
var StrimUp = angular.module("StrimUp", ["ui.bootstrap.modal","ngRoute"]);/*show popup model for more options  */
//start by showing a model 

StrimUp.controller("MyCtrl", function($scope) {

  $scope.open = function() {
    $scope.showModal = true;
  };
  $scope.ok = function() {
    $scope.showModal = false;
  };

  $scope.cancel = function() {
    $scope.showModal = false;
  };

});
StrimUp.config(function($routeProvider,$locationProvider) {
        $locationProvider.html5Mode(true);


        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : '../view/partials/index.html',
                controller  : 'mainController'
            })

            // route for the about page
            .when('/about', {
                templateUrl : 'partials/about.html',
                controller  : 'aboutController'
            })
            // route for the contact page
            .when('/contact', {
                templateUrl : 'partials/contact.html',
                controller  : 'contactController'
            })
            .otherwise({ redirectTo: '../view/partials/index.html' });
    });
 // create the controller and inject Angular's $scope
    StrimUp.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message="i am ready to serve here";
    });

    StrimUp.controller('aboutController', function($scope) {
        $scope.message = 'yup application it is the way of getting all business done around in rwanda by only a single click and have enought information about it, you may also need to register your own business to be listed here';
    });

    StrimUp.controller('contactController', function($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
});
 

