<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use Illuminate\Http\Request;

class AutherController extends Controller
{
    public function all_authers()
    {
        return $authers = Auther::with('posts.comments')->get();
    }


    public function store(Request $request)
    {
       $request->validate([
        "name" => 'required|string',
        "age" => 'required|integer',
        "image" => 'required|image',
        "gender" => 'required|in:male,female'
       ]);

        $path = '';
        if ($request->file('image')) {
            $image = $request->file('image');
            $path = $image->store('posts', 'public');
        }

            $authers = new Auther();
            $authers->name = $request->name;
            $authers->age = $request->age;
            $authers->gender = $request->gender;
            $authers->image = $path;
            $authers->save();
            $authers = Auther::get();
            return view('admin-dashboard.authers.index',[
               "authers"=> $authers
            ]);
    }


    public function index(){
         $authers = Auther::get();
         return view('admin-dashboard.authers.index',[
            "authers"=> $authers
         ]);
    }


    public function create(){
        return view('admin-dashboard.authers.post');

   }
}
