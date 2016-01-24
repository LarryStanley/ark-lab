angular.module('indexApp', [])
	.controller('IndexController', function($scope, $http) {
		var index = this;

		index.getBlockData = function() {
			$http.get("/api/index_block").then(function(response) {
				index.blocks = response.data;
		    });
		}

		index.saveBlock = function() {
			$http({
				url: '/api/index_block/save',
				method: 'POST',
				headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
				data: JSON.stringify(index.blocks)
			}).then(function successCallback(response) {
				console.log(response);
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

	    	if (!index.newLink) {
	    		Materialize.toast('記得填寫連結', 4000);
	    		validate = false;
	    	}

	    	var file = new FormData();
	    	if ($("#newBlockImage").prop('files')) {
	    		file.append('photo', $("#newBlockImage")[0].files[0]);
				$http({
					url: '/api/upload_image',
					method: 'POST',
					headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content'), 'Content-Type':'application/x-www-form-urlencoded'},
					data: {"photo": $('#newBlockImage').val()}
				}).then(function successCallback(response) {
						console.log(response);
					}, function errorCallback(response) {
						console.log(response);
					});
			} else {
				Materialize.toast('記得上傳圖片', 4000);
	    		validate = false;
			}



	    	if (validate) {
		    	var newBlock = {
		    		title: index.newTitle,
		    		illustration: index.newIllustration,
		    		link: index.newLink,
		    		order: index.blocks.length,
		    		image: "about.jpg"
		    	}

		    	index.blocks.push(newBlock);

		    	index.newTitle = '';
		    	index.newIllustration = '';
		    	index.newLink = '';
		    }
	    	console.log(index.blocks);
	    }

    	index.getBlockData();
	})
	.config(function($interpolateProvider){
		$interpolateProvider.startSymbol('[[').endSymbol(']]');
	})
	.filter('newlines', function () {
	    return function(text) {
	        return text.replace(/\n/g, '<br/>');
	    }
	});