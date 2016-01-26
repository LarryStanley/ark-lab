angular.module('indexApp', ["ngFileUpload", "ui.sortable"])
	.controller('IndexController', ['$scope', '$http', 'Upload', '$timeout' , function($scope, $http, Upload, $timeout) {
		var index = this;
		index.type = "slider";

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
	                index.imageName = response.data.data.link;
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

		index.getBlockData = function() {
			$http.get("/api/index_" + index.type).then(function(response) {
				index.blocks = response.data;
		    });
		}

		index.showSliderEditor = function() {
			index.type = "slider";
			index.getBlockData();
		}

		index.showBlockEditor = function() {
			index.type = "block";
			index.getBlockData();
		}

		index.saveBlock = function() {
			for (var i = 0; i < index.blocks.length; i++) {
				index.blocks[i].order = i;
			}

			$http({
				url: '/api/index_' + index.type + '/save',
				method: 'POST',
				headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
				data: JSON.stringify(index.blocks)
			}).then(function successCallback(response) {
				$(".toast").remove();
				location.reload();
			}, function errorCallback(response) {
				console.log(response);
			});
		}

	    index.cancelBlock = function() {
	    	index.getBlockData();
	    }

	    index.deleteBlock = function(key) {
	    	index.blocks.splice(key, 1);
	    }

	    index.newBlock = function() {
	    	var validate = true;

	    	if (!index.newTitle) {
	    		Materialize.toast('記得填寫標題', 4000);
	    		validate = false;
	    	}

	    	if (!index.newIllustration) {
	    		Materialize.toast('記得填寫說明', 4000);
	    		validate = false;
	    	}

	    	if (!index.newLink || index.type != "slider") {
	    		Materialize.toast('記得填寫連結', 4000);
	    		validate = false;
	    	}

	    	if (validate) {
		    	var newBlock = {
		    		title: index.newTitle,
		    		illustration: index.newIllustration,
		    		link: index.newLink,
		    		order: index.blocks.length,
		    		image: index.imageName
		    	}

		    	index.blocks.push(newBlock);

		    	index.newTitle = '';
		    	index.newIllustration = '';
		    	index.newLink = '';
		    }
	    	console.log(index.blocks);
	    }

    	index.getBlockData();
	}])
	.config(function($interpolateProvider){
		$interpolateProvider.startSymbol('[[').endSymbol(']]');
	})
	.filter('newlines', function () {
	    return function(text) {
	        return text.replace(/\n/g, '<br/>');
	    }
	});