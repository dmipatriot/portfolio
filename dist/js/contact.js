function userController($scope) {
$scope.Name = '';
$scope.Email = '';

$scope.edit = true;
$scope.error = false;
$scope.incomplete = false; 


$scope.$watch('Name', function() {$scope.test();});
$scope.$watch('Email', function() {$scope.test();});

$scope.test = function() {
  $scope.incomplete = false;
  if (!$scope.Name.length ||
  !$scope.Email.length) {
       $scope.incomplete = true;
  }
}

}