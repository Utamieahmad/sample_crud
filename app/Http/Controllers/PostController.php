<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index',compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index')->with('success','Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }
}
