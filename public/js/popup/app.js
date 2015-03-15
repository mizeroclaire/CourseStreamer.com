
var StrimUp = angular.module("StrimUp", ["ui.bootstrap.modal","ngRoute"],function($interpolateProvider) {
    //to avoid blade confusion chage the angular templating to use this syntax {}
        $interpolateProvider.startSymbol('{');
        $interpolateProvider.endSymbol('}');
}).service(function(){

})

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


/* Routing the internal view partials  */
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
            .otherwise({ templateUrl:'js/partials/current.class.html' });
    });
 // create the controller and inject Angular's $scope and http to cummunicate with angular(php)
    StrimUp.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message="i am ready to serve here";
    });

    StrimUp.controller('aboutController', function($scope) {
        $scope.message = ' be listed here';
    });
    /*  here */
    StrimUp.controller('communityController', function($scope) {
        $scope.message = 'hello community! JK. This a message from CEO.';
});

//-----------------------deal with user's actions and interaction with other users---------------//
function returnMethod(){
    return 'GET';
}
function returnUrl(){
    return 'user';
}
function returnUserId(){
    return '1';
}
function returnVideo(userId){

}


StrimUp.controller('Reactor',function($scope,$http){
    $scope.method =returnMethod();
    $scope.url = returnUrl();
    $scope.id=returnUserId();
    $http({method: $scope.method, url: $scope.url+'/'+$scope.id}).
    success(function(data, status) {
        $scope.status = status;
        $scope.data = data;
    }).
    error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
    });
});

 

