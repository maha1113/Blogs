<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ComController extends Controller
{
    public function info(){
      $posts = Comment::all();
      foreach($posts as $comments){
        echo "title :" . $comments->title;
        echo"<br>";
        echo"-----";
        echo"<br>";
        echo "description :" . $comments->description;
        echo"<br>";
        echo"-----";
        echo"<br>";
      }
    }
}
