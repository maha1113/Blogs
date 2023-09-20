<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin-dashboard.master');
    }

    public function posts(){
        $posts = Post::with('auther')->latest()->get();
        return view('admin-dashboard.posts.index',[
            "posts" => $posts
        ]);
    }
    public function post(){
        $authers = Auther::all();
        return view('admin-dashboard.posts.post',[
            "authers" => $authers
        ]);
    }
}
