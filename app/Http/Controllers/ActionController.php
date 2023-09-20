<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function destroy($id){

        // return $id;
     $deleted =  Contact::destroy($id);
     if($deleted > 0){

        return redirect()->route('create.contact');
     } else {
        return "failed";

     }
    }


    public function show($id){
        $post = Post::with('comments')->find($id);
        // foreach ($post as $post) {
        //   "posts:"
          echo "post title :" .  $post->title;
          echo "<br>";
          echo "post description :" . $post->description ;
          echo "<br>";


          echo "-------comments--------";
          echo "<br>";

          foreach ($post->comments as  $comment){
           echo "comment title :" . $comment->title;
           echo "<br>";
           echo "comment description :" . $comment->description ;
           echo "<br>";
          }
        // }
        //  return redirect()->route('show.posts');

    }
    //  public function showpost(Request $request){
    //      $post = new Post();
    //      $post->title = $request->title;
    //      $post->description = $request->description;
    //      $post->save();
    //  }

    public function showw(Request $request){
      $comments = new Comment();
      $comments->title = $request->title;
      $comments->description = $request->description;
      $comments->save();
      return view('site1assets.show');
    }
}
