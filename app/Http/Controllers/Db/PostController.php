<?php

namespace App\Http\Controllers\Db;

use App\Http\Controllers\Controller;
use App\Models\Auther;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class PostController extends Controller
{

public function abc(){
    return 'hello';
}

public function index(){
    return Post::all();
}

public function auth(){
    return Auther::all();
}

public function com(){
    return Comment::all();
}

public function db(){
    return 'hello world';
}

public function cd(){
    return 'hello in my web bage';
}
 public function tr(){
    return '_____';
 }

 public function md(){
    return 'Newww';
 }

}
