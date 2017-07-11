@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">
        {{-- @include ('posts.post') --}}
        @include ('layouts.errors')

        <div class="blog-post">

            <h2 class="blog-post-title">
                {{ $post->postTitle }}
            </h2>
            <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->postAuthor }}</a></p>

            <p> {{ $post->postBody }} </p>
        </div>  {{-- end of bog post --}}

    </div>
@endsection