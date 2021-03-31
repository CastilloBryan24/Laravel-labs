<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
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
// Home
Route::get('/', [HomeController::class, 'index']);


// Services
Route::get('/services', [ServiceController::class, 'index']);


// Blog
Route::get('/blog', [BlogController::class, 'index']);


// Contact
Route::get('/contact', [ContactController::class, 'index']);


// Post
Route::get('/blogPost', [PostController::class, 'index']);
