angular.module('eduApp', ["ui.calendar"])
	.controller('EduController', ['$scope', '$http', function($scope, $http) {

		$scope.eventSources = [
            [{title: 'Long Event',start: new Date(2016, 1, 30),end: new Date(2016, 1, 31)}]
		];
		$scope.uiConfig = {
			calendar:
			{
				height: 450,
				editable: false,
				header: {
					center: 'title',
					left: '',
					right: ''
				},
				theme: true,
				dayClick: $scope.alertEventOnClick,
				eventDrop: $scope.alertOnDrop,
				eventResize: $scope.alertOnResize,
			    monthNames: ["Jan", "Jan", "Jan", "Jan", "Jan", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			    dayNames: ["星期天", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"]
			}
	    };

	    var edu = this;
	    $http({
			url: '/api/activity_record/',
			method: 'GET',
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		}).then(function successCallback(response) {
			edu.activityData = response.data;
	    	console.log(response);
		}, function errorCallback(response) {
			console.log(response.data);
		});

	}])
	.config(function($interpolateProvider){
		$interpolateProvider.startSymbol('[[').endSymbol(']]');
	})
	.filter('newlines', function () {
	    return function(text) {
	        return text.replace(/\n/g, '<br/>');
	    }
	});