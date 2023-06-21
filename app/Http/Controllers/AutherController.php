<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use Illuminate\Http\Request;

class AutherController extends Controller
{
    public function all_authers(){
        return $authers = Auther::with('posts.comments')->get();
    }
}
