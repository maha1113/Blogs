<?php

use App\Http\Controllers\AbcController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutherController;
use App\Http\Controllers\ComController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\Db\PostController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site1Controller;
use App\Models\About;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('site1')->name('site1.')->group(function() {
    Route::get('/',[Site1Controller::class,'index'])->name('index');
    Route::get('/about',[Site1Controller::class, 'about'])->name('about');
    Route::get('/contact',[Site1Controller::class, 'contact'])->name('contact');
    Route::post('/contact',[Site1Controller::class, 'store_contact'])->name('store.contact');
    Route::get('/post',[Site1Controller::class, 'post'])->name('post');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Route::get('rtt', [PostController::class, 'abc'] );

// Route::get('news',[PostController::class,'index']);
// // Route::get('authers',[PostController::class, 'auth']);

// // Route::get('comments',[PostController::class, 'com']);

// // Route::get('user',[PostController::class, 'db']);

// // Route::get('file',[PostController::class, 'cd']);

// // Route::get('test',[PostController::class, 'tr']);

// Route::get('info',[PostController::class, 'md']);
Route::get('/',[ProfileController::class, 'index']);
Route::get('authers',[AutherController::class, 'all_authers']);
Route::get('posts',[CommentController::class,'all_posts']);
Route::get('info',[NewController::class, 'table']);
Route::get('ad',[NewController::class, 'authers']);



















Route::get('last',[AbcController::class, 'new']);
Route::get('po',[ComController::class, 'info']);



Route::prefix('admin')->group(function(){

    Route::get('/',[AdminController::class,'index']);
    Route::get('/posts',[AdminController::class,'posts'])->name('posts');
    Route::get('/post',[AdminController::class,'post'])->name('post');
    Route::post('/postss',[CreateController::class, 'postss'])->name('postss');


    // Aurhers
    Route::get('/authers',[AutherController::class,'index'])->name('authers');
    Route::get('/create/auther',[AutherController::class,'create'])->name('create.auther');
    Route::post('/create/auther',[AutherController::class, 'store'])->name('store.auther');
    Route::get('/about',[AboutController::class, 'about'])->name('about');
    Route::get('/create/about',[AboutController::class, 'aboutss'])->name('create.about');
    Route::post('/create/about',[AboutController::class, 'store'])->name('store.about');
    Route::get('/contactss',[ContactController::class, 'contactss'])->name('contactss');
    Route::get('/create/contact',[ContactController::class, 'contacts'])->name('create.contact');
    Route::post('/create/contact',[ContactController::class, 'store'])->name('create.contact');
    Route::delete('action/destroy/{id}',[ActionController::class, 'destroy'])->name('action/destroy');
    Route::get('show/posts/{id}',[ActionController::class, 'show'])->name('show.posts');
    Route::get('show/contact',[ActionController::class, 'showw'])->name('show.contact');
    Route::get('show/post',[ActionController::class, 'showpost'])->name('show.post');

     //to do list
     Route::get('/list',[ListController::class, 'index'])->name('list');
     Route::get('/create/list',[ListController::class,'create'])->name('create.list');
     Route::post('/store/list',[ListController::class, 'storelist'])->name('store.list');
     Route::delete('/delete/list/{id}',[ListController::class, 'destroy'])->name('delete.list');
     Route::get('/change/status/{id}',[ListController::class, 'status'])->name('change.status');
     Route::get('/show/list',[ListController::class, 'show'])->name('show.list');




});

Route::get('/name/{name}',function($name){
    echo $name;
});
