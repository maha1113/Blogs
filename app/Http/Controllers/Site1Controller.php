<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
  public function index(){
    return view('site1assets.index');
  }
  public function about(){
    return view('site1assets.about');
  }
  public function contact(){
    return view('site1assets.contact');
  }
  public function post(){
    return view('site1assets.post');
  }
}
