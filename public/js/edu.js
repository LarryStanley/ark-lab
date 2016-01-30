angular.module('eduApp', ["ui.calendar"])
	.controller('EduController', ['$scope', '$http', function($scope, $http) {

		$scope.eventSources = [
			{
	            url: "http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic"
		    }
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
	}])
	.config(function($interpolateProvider){
		$interpolateProvider.startSymbol('[[').endSymbol(']]');
	})
	.filter('newlines', function () {
	    return function(text) {
	        return text.replace(/\n/g, '<br/>');
	    }
	});