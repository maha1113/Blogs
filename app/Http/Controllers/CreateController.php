<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use App\Models\Post;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function postss(Request $request){
        $path = '';
       if($request->file('image')){
        $image = $request->file('image');
        $path = $image->store('posts', 'public');

        }
       $post = new Post();
       $post->title = $request->title;
       $post->description = $request->desc;
       $post->image = $path;
       $post->auther_id = $request->auther_id;
       $post->save();
       $posts = Post::with('auther')->latest()->get();
       return view('admin-dashboard.posts.index',[
           "posts" => $posts
       ]);
    //    dd($authers);

    //    return view('admin-dashboard.posts.post',[
    //        "authers" => $authers
    //    ]);    }
}
}
