<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AbcController extends Controller
{
    public function new(){
        $posts = Post::all();
        foreach($posts as $post){
            echo "title :" . $post->title;
        }
    }
}
