<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

//Route::get('/email', function () {
  //  return new \App\Mail\NewUserWelcomeMail();
//});

Route::get('/home', [App\Http\Controllers\DevotionController::class, 'index'])->name('index');
Route::get('/', [App\Http\Controllers\DevotionController::class, 'index'])->name('index');
Route::get('/devotion/{devotion}', [App\Http\Controllers\DevotionController::class, 'show'])->name('show');
Route::get('/podcast/{podcast}', [App\Http\Controllers\PodcastController::class, 'show'])->name('show');

Route::get('/api_7834y3rgdschfdu34er34fccge743c', [App\Http\Controllers\DevotionController::class, 'create'])->name('devotion');
Route::post('/devotion/store', [App\Http\Controllers\DevotionController::class, 'store'])->name('devotion.store');

Route::get('/api_7834y3rghsdfshc536vf98ccge743c', [App\Http\Controllers\PostController::class, 'create'])->name('post');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

Route::get('/api_7834y3rgdschfnvfdvjngvccge743c', [App\Http\Controllers\VideoController::class, 'create'])->name('videos');
Route::post('/video/store', [App\Http\Controllers\VideoController::class, 'store'])->name('video.store');

Route::get('/api_7834y3rgdsch854qtgr34fccge743c', [App\Http\Controllers\AdminController::class, 'about'])->name('about');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about.us');

Route::get('/api_7834y98iuhjvwdsr4er34fccge743c', [App\Http\Controllers\AdminController::class, 'faq'])->name('faq');
Route::get('/policy', [App\Http\Controllers\HomeController::class, 'policy'])->name('policy');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::get('/author', [App\Http\Controllers\HomeController::class, 'author'])->name('author');

Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');
Route::post('/komment/store', [App\Http\Controllers\KommentController::class, 'store'])->name('komment.add');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');

