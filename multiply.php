<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
<input type="text" ng-model="num1">
<input type="text" ng-model="num2">

<p>Total in dollar: <span ng-bind="num1* num2"></span></p>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.num1= "3";
    $scope.num2= "4";
});
</script>
</body>
</html>