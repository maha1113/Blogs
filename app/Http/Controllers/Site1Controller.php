<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class Site1Controller extends Controller
{
  public function index(){
    $all_posts = Post::with('auther','comments')->get();

    return view('site1assets.index',[
        "posts"=> $all_posts,
         "comments"=> $all_posts
    ]);
  }
  public function about(){

        $about_us = About::first();
        return view('site1assets.about',[
        "about_us" => $about_us
        ]);



  }
  public function contact(){

    return view('site1assets.contact');
  }
   public function store_contact(Request $request){
     $contact = new Contact();
     $contact->name = $request->name;
     $contact->email = $request->email;
     $contact->phone = $request->phone;
     $contact->message = $request->message;
    $contact->save();

    return view('site1assets.contact');
   }
  public function post(){
    return view('site1assets.post');
  }
}

