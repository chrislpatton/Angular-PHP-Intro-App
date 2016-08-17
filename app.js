(function() {
	var app = angular.module('funWithCountries', []);

	app.controller('CountryController',function($scope,$http){
		// var that = $scope;
		$http({
			method: 'GET',
			url: 'services/getCountries.php'
		}).success(function(data) {
				$scope.countries = data;
		});

	});

})();
