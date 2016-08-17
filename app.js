(function() {
	var app = angular.module('funWithCountries', []);

	app.factory('countryService', function($http){
		var baseUrl = 'services/';
		return {
			getCountries: function() {
				return $http.get(baseUrl + 'getCountries.php');
			}
		};
	})
	
	app.controller('CountryController',function($scope,countryService){
		// var that = $scope;
		countryService.getCountries()
			.success(function(data) {
				$scope.countries = data;
		});

	});

})();
