angular.module('mobly', [])
	.config(function () {
		console.log('angular:config()');
	})
	.run(function () {
		console.log('angular:run()');
	})
	.controller('DebugController', function($scope) {
		console.log('DebugController');
 		$scope.show = true;
		$scope.toggleBar = function () {
			$scope.show =  ! $scope.show;
		}
	})
;

angular.element(document).ready(function () {
	angular.bootstrap(document, ['mobly']);
});
