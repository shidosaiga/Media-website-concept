<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        $user = User::all();
        return view('welcome', [
            'post' => $post,
            'user' => $user

        ]);
    }
    public function header()
    {
        $post = Post::all();
        $user = User::all();
        return view('header', [
            'post' => $post,
            'user' => $user

        ]);
    }
  

    public function create()
    {
        return view('post-add');
    }

    public function store(Request $request)
    {
        $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
        $file = $request->file('image');
        $destinationPath = public_path() . '/img/';
        $file->move($destinationPath, $fileName);


        $post = new \App\Post;
        $post->userid = Auth::user()->id;
        $post->content = $request->content;
        $post->image = $fileName;
        $post->save();
        return redirect('/');
    }

    public function show($id)
    {
        $post = \App\Post::find($id);
        return view('post.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = \App\Post::find($id);
        return view('post-edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $filename = $post->image;
        if ($request->hasFile('image')) {
            if ($filename) {
                File::delete(public_path() . '/img/' . $filename);
            }
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image');
            $destinationPath = public_path() . '/img/';
            $file->move($destinationPath, $fileName);
            $new = $fileName;
        } else {

            $new = $post->image;
        };
        Post::updateOrCreate([
            'id' => $id
        ], [
            'content' => $request->content,
            'image' => $new
        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $filename = $post->image;
        File::delete(public_path() . '/admin/images/herbs/' . $filename);
        Post::destroy($id);
        return redirect('/');
    }
}
