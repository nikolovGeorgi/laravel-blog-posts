<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {

    public function index($id = null) {
        if ($id == null){
            return Post::latest()->get();
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request) {
        $post = new Post;
        $post->postTitle = $request->input('postTitle');
        $post->postBody = $request->input('postBody');
        $post->postAuthor = $request->input('postAuthor');
        $post->save();
    }
    public function show($id) {
        return Post::find($id);
    }
    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->postTitle = $request->input('postTitle');
        $post->postBody = $request->input('postBody');
        $post->postAuthor = $request->input('postAuthor');
        $post->save();
    }
    public function destroy($id) {
        $post = Post::find($id)->delete();
    }
}