
var StrimUp = angular.module("StrimUp", ["ui.bootstrap.modal","ngRoute"],function($interpolateProvider) {

    //to avoid blade confusion chage the angular templating to use this syntax {}
        $interpolateProvider.startSymbol('{');
        $interpolateProvider.endSymbol('}');
    });
StrimUp.controller("ModalCtrl", function($scope) {

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
        
        $routeProvider
            // route for the home page
            .when('/index', {
                templateUrl : 'js/partials/index.html',
                controller  : 'mainController'
            })

            // route for the learn page
            .when('/learn', {
                templateUrl : 'js/partials/current.class.html',
                controller  : 'aboutController'
            })
            // route for the community page
            .when('/community', {
                templateUrl : 'js/partials/community.html',
                controller  : 'communityController'
            })
            .otherwise({ redirectTo: '/in/Strims' });
    });
 // create the controller and inject Angular's $scope and http to cummunicate with angular(php)
    StrimUp.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message="i am ready to serve here";
    });

    StrimUp.controller('aboutController', function($scope) {
        $scope.message = 'yup application it is the way of getting all business done around in rwanda by only a single click and have enought information about it, you may also need to register your own business to be listed here';
    });

    StrimUp.controller('communityController', function($scope) {
        $scope.message = 'hello community! JK. This a message from CEO.';
});
StrimUp.controller("Reactor",function($scope,$http){

    $http.get('/user/1').success(function(data){
        $scope.data=data;
    });
});

 

