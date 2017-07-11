app.filter('myDateFormat', function myDateFormat($filter){
	return ((dateAsText) => {
		let	template= new Date(dateAsText.replace(/-/g,"/"));
		return $filter('date')(template, "MMM-dd-yyyy");
	})
})
app.controller('PostController', ($scope, $http, API_URL) => {
	// retrieve Post listing from API
	$http.get(API_URL + "post")
		.success((response) => {
			$scope.posts = response;
	});

	// show modal Form
	$scope.toggle = (modalstate, id) => {
		$scope.modalstate = modalstate;
		switch(modalstate) {
			case 'add':
				$scope.form_title = "Add New Post";
				break;
			case 'edit':
				$scope.form_title = "Post Detail";
				$scope.id = id;
				$http.get(API_URL + 'post/' + id).success((response) => {
					$scope.post = response;
				});
				break;
			default:
				break;
		}
		$('#myModal').modal('show');
	}

	// save new post and update existing post
	$scope.save = (modalstate, id) => {
		let url = API_URL + "post";
		if (modalstate === 'edit') { url += "/" + id; }
		
		$http({
			method: 'POST',
			url: url,
			data: $.param($scope.post),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).success((response) => {
			location.reload();
		}).error((response) => {
			console.log(response);
			alert('An error has occured. Please check the logs for more details');
		});
	}

	// delete post record
	$scope.confirmDelete = function(id) {
		let isConfirmDelete = confirm('Are you sure you want to delete this post?');
		if (isConfirmDelete) {
			$http({
				method: 'DELETE',
				url: API_URL + 'post/' + id
			}).success((data) => {
				location.reload();
			}).error((data) => {
				console.log(data);
				alert('Failed to delete');
			});
		} else {
			return false;
		}
	}
});
