app = angular.module("angular-animate", [])

app.controller "animate-controller", ($scope, $timeout, $log) ->
  $scope.activeAnimation = "animat0r"
  $scope.hello = false
  $scope.lock = false
  $scope.setActiveAnimation = ($animationName) ->
    return  if $scope.lock
    $log.info $animationName
    $scope.lock = true
    $scope.activeAnimation = ""
    $scope.hello = false
    $timeout (->
      $scope.hello = true
    ), 1000
    $timeout (->
      $scope.activeAnimation = $animationName
      $scope.lock = false
    ), 2000

  $scope.isActiveAnimation = ($animationName) ->
    $scope.activeAnimation is $animationName

  $scope.isBye =->
    not $scope.hello

  $scope.isHello =->
    $scope.hello