<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use App\Models\Comment;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function table(){
        $comments = Comment::all();
        foreach($comments as $comment){
            echo "title :" . $comment->title;
            echo "<br>";
            echo "------";
            echo "<br>";
            echo "description :" . $comment->description;
            echo "<br>";
            echo "------";
            echo "<br>";

        }

    }
     public function authers() {
         $auther = Auther::all();
          foreach($auther as $auther){
             echo "name :" .$auther->name;
             echo "<br>";
            echo "-------";
            echo "<br>";
            echo "age :" . $auther->age;
            echo "<br>";
            echo "-------";
            echo "<br>";
        }
    }


}
