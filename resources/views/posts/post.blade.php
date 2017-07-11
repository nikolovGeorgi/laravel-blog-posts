<br>
<div class="blog-post">
	
	<h2 class="blog-post-title">
		<a href="/posts/@{{ post.id }}">
			@{{ post.postTitle }}
		</a>
	</h2>
	
	<p class="blog-post-meta">@{{ post.created_at | myDateFormat }} by <a href="#">@{{ post.postAuthor }}</a></p>
	<p> @{{ post.postBody }} </p>
	
	<button class="btn btn-warning btn-xs btn-detail" ng-click="toggle('edit', post.id)">
		<span class="glyphicon glyphicon-edit"></>
	</button>
	
	<button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(post.id)">
		<span class="glyphicon glyphicon-trash"></span>
	</button>
</div>