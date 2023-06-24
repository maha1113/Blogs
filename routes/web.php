<?php

use App\Http\Controllers\AbcController;
use App\Http\Controllers\AutherController;
use App\Http\Controllers\ComController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Db\PostController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site1Controller;
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




