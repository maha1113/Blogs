<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class ComController extends Controller
{
 public function info(){
    $authers = Auther::with('posts.comments')->get();

   return view('site1assets/test',[
    "authers" => $authers ,

   ]);












    // foreach($authers as $auther){
    //     echo"auther name :" .$auther->name;
    //     echo"<br>";
    //     echo"auther age :" .$auther->age;
    //     echo"<br>";

    //     foreach($auther->posts as $post){
    //         echo"post title :" .$post->title;
    //         echo"<br>";
    //         echo"post description :" .$post->description;
    //         echo"<br>";

    //       foreach($post->comments as $comment ){
    //         echo"comment title :" .$comment->title;
    //         echo"<br>";
    //         echo"comment description :" .$comment->description;
    //         echo"<br>";
    //       }
    //       echo"<br>";
    //       echo"--------";
    //       echo"<br>";
    //     }


    // }
 }
}
