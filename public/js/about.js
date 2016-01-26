angular.module('aboutApp', ["ngFileUpload", "ui"])
	.controller('AboutController', ['$scope', '$http', 'Upload', '$timeout' , function($scope, $http, Upload, $timeout) {
		var about = this;
		about.imageName = "";
		about.newTitle = "";
		about.newIllustration = "";
		about.newLink = "";
		about.created_time = "";
		about.editId = "";

		$scope.year = [];
		for (var i = 2014; i <=2018; i++) {
			$scope.year.push({value: i.toString(), id: i});
		}

		$scope.month = [];
		for (var i = 1; i <=12; i++) {
			$scope.month.push({value: i.toString(), id: i});
		}

		$scope.day = [];
		for (var i = 1; i <= 31; i++) {
			$scope.day.push({value: i.toString(), id: i});
		};

		$scope.uploadFiles = function(file, errFiles) {
	        $scope.f = file;
	        $scope.errFile = errFiles && errFiles[0];
	        if (file) {
	            file.upload = Upload.upload({
	                url: 'https://api.imgur.com/3/image',
	                data: {image: file},
	                headers: {
				        'Content-Type':'application/x-www-form-urlencoded',
				        'Authorization': 'Client-ID 0cabe1987d4fb3f'
				    }
	            });

	            file.upload.then(function (response) {
	                $timeout(function () {
	                    file.result = response.data;
	                });
	                $("#previewLoading").hide();
	                about.imageName = response.data.data.link;
	                $(".preview img").show();	            
	            }, function (response) {
	                if (response.status > 0)
	                    $scope.errorMsg = response.status + ': ' + response.data;
	            }, function (evt) {
	                file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
	                $("#previewLoading").show();
	            });
	        }   
	    }

		$http.get("/api/about_us").then(function(response) {
			$("#aboutLogs").show();
			about.createdLogs = response.data;
	    });

	    about.saveNewLog = function() {
	    	about.newLog = {
	    		title: about.newTitle,
	    		illustration: about.newIllustration,
	    		link: about.newLink,
	    		image: about.imageName,
	    		created_time: about.newYear.value + "-" + about.newMonth.value + "-" + about.newDay.value,
	    		id: about.id
	    	};

	    	$http({
				url: '/api/about_us/save',
				method: 'POST',
				headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
				data: JSON.stringify(about.newLog)
			}).then(function successCallback(response) {
				about.newLog.id = response.data;
		    	if (!about.id) {
					about.createdLogs.push(about.newLog);
		    	} else {
		    		about.createdLogs[about.index] = {
		    			title: about.newTitle,
			    		illustration: about.newIllustration,
			    		link: about.newLink,
			    		image: about.imageName,
			    		created_time: about.newYear.value + "-" + about.newMonth.value + "-" + about.newDay.value,
			    		id: about.id
		    		}
		    	}
		    	about.imageName = "";

			}, function errorCallback(response) {
				console.log(response.data);
			});
	    }

	    about.edit = function(id, index) {
	    	$('select').material_select('destroy');

	    	about.newTitle = about.createdLogs[index].title;
	    	about.newIllustration = about.createdLogs[index].illustration;
	    	about.newLink = about.createdLogs[index].link;
	    	about.imageName = about.createdLogs[index].image;
	    	about.id = id;
	    	about.index = index;
	    	var time = about.createdLogs[index].created_time.split("-");

	    	about.newYear = {value: parseInt(time[0]).toString(), id: parseInt(time[0])};
	    	about.newMonth = {value: parseInt(time[1]).toString(), id: parseInt(time[1])};
	    	about.newDay = {value: parseInt(time[2]).toString(), id: parseInt(time[2])};

	    	$scope.$watch(about.newYear, function() {
				$scope.$evalAsync(function() {
    			    $('select').material_select();
			    });
			});

	    	$("#newLogModal").openModal();
            $(".preview img").show();
	    }

	    about.delete = function(id, index) {
	    	
	    	$http({
				url: '/api/about_us/delete/' + id,
				method: 'POST',
				headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
			}).then(function successCallback(response) {
				about.createdLogs.splice(index, 1);
		    	console.log(response);
			}, function errorCallback(response) {
				console.log(response.data);
			});
	    }

	    about.addNewLog = function() {
	    	about.id = "";
	    }

	    $scope.update = function() {
	    	//about.newYear = $scope.year[1];
	    	console.log(about.newYear);
	    }

	}])
	.config(function($interpolateProvider){
		$interpolateProvider.startSymbol('[[').endSymbol(']]');
	})
	.filter('nl2br', ['$sce', function ($sce) {
	    return function (text) {
	        return text ? $sce.trustAsHtml(text.replace(/\n/g, '<br/>')) : '';
	    };
	}]);