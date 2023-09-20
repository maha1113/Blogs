<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function store(Request  $request ){
        $path = '';
        if($request->file('image')){
          $image = $request->file('image');
          $path = $image->store('about','public');
        }
        $about = new About();
        $about->title = $request->title;
        $about->sub_title = $request->subtitle;
        $about->desc = $request->desc;
        $about->image = $path;
        $about->save();

        $abouts = About::latest()->get();
            // dd($abouts);
        return view('admin-dashboard.abouts.about',[
            "abouts"=> $abouts


        // return view('site1assets.about',[
        //   "about"=> $abouts,


        ]);
    }
    public function aboutss(){
        return view('admin-dashboard.abouts.create');
    }

    public function about(){
        $abouts = About::latest()->get();
     return view('admin-dashboard.abouts.about',[
        "abouts"=> $abouts

    ]);    }
}
