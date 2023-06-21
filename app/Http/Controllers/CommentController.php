<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function all_posts(){
         $Posts = Post::all();
         foreach($Posts as $post){
            echo "title: " .  $post->title;
            echo "<br>";
            echo "description: " . $post->description;
            echo "<br>";
            echo "-----------------";
            echo "<br>";
         }
    }
}
