<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Backoffice;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
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
// Logo
Route::get('/logo-edit/{id}', [LogoController::class, 'edit']);
Route::post('/logo-update/{id}', [LogoController::class, 'update']);
// Titre
Route::get('/titre-edit/{id}', [TitreController::class, 'edit']);
Route::post('/titre-update/{id}', [TitreController::class, 'update']);

// Services
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/service-edit/{id}', [ServiceController::class, 'edit']);
Route::post('/service-update/{id}', [ServiceController::class, 'update']);
Route::post('/service-store', [ServiceController::class, 'store']);
Route::get('/service-destroy/{id}', [ServiceController::class, 'destroy']);

// Testimonial
Route::post('/testimonial-store', [TestimonialController::class, 'store']);
Route::get('/testimonial-edit/{id}', [TestimonialController::class, 'edit']);
Route::post('/testimonial-update/{id}', [TestimonialController::class, 'update']);
Route::get('/testimonial-destroy/{id}', [TestimonialController::class, 'destroy']);

// About
Route::get('/about-edit/{id}', [AboutController::class, 'edit']);
Route::post('/about-update/{id}', [AboutController::class, 'update']);


// Blog
Route::get('/blog', [BlogController::class, 'index']);


// Contact
Route::get('/contact', [ContactController::class, 'index']);


// Post
Route::get('/blogPost', [PostController::class, 'index']);


// Backoffice
Route::get('/backoffice', [Backoffice::class, 'index']);
Route::get('/titre', [TitreController::class, 'index']);
Route::get('/boService', [ServiceController::class, 'backoffice']);
Route::get('/boTestimonial', [TestimonialController::class, 'index']);
Route::get('/boAbout', [AboutController::class, 'index']);