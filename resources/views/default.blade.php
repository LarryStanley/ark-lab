<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{!! csrf_token() !!}"/>

	<title><?php if(!empty($title)) echo $title." - ";?>Ark Lab 多旋翼工坊</title>

	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/css/materialize.min.css">

	
	@yield("head")

</head>
<body>
	
	@yield("body")

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.modal-trigger').leanModal();
			$('.button-collapse').sideNav();
		});
	</script>
	@yield("javascript")
</body>
</html>