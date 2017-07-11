<!DOCTYPE html>
<html lang="en" ng-app="getPost">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Posts with Laravel and AngularJS</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  	</head>

	<body>
	    <div class="container">
			@include ('layouts.header')

			<div ng-controller="PostController">
				<button id="btn-add" class="btn btn-success btn-xs" ng-click="toggle('add', 0)">Add New Post</button>

				<div ng-repeat="post in posts">
					@include('posts.post')
				</div>

				@include ('modal.show')
			</div>
    	</div>

		@include ('layouts.footer')

		@include ('scripts.master')
	</body>
</html>
