<?php

namespace App\Http\Controllers\Db;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Auther;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class PostController extends Controller
{
public function index(){
    return $posts = Post::with('auther')->get();
}

}
