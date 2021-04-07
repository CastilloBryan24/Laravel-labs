<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Backoffice;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [HomeController::class, 'accueil']);
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

// Team
Route::get('/team-show/{id}', [TeamController::class, 'show']);
Route::get('/team-edit/{id}', [TeamController::class, 'edit']);
Route::post('/team-update/{id}', [TeamController::class, 'update']);
Route::get('/user-validate/{id}', [TeamController::class, 'userValidate']);
Route::get('/team-destroy/{id}', [TeamController::class, 'destroy']);
Route::post('/team-store', [TeamController::class, 'store']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);

// Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact-edit/{id}', [ContactController::class, 'edit']);
Route::post('/contact-update/{id}', [ContactController::class, 'update']);
Route::post('/formulaire-store', [FormulaireController::class, 'store']);

// Newsletter
Route::post('/news-store', [NewsletterController::class, 'store']);

// Map
Route::get('/map-edit/{id}', [MapController::class, 'edit']);
Route::post('/map-update/{id}', [MapController::class, 'update']);

// Post
Route::get('/blogPost', [PostController::class, 'index']);
Route::get('/post-show/{id}', [BlogController::class, 'show']);
Route::post('/post-store', [PostController::class, 'store']);

// Comments
Route::post('/comment-store', [CommentController::class, 'store']);
Route::get('/comment-validate/{id}', [CommentController::class, 'commentValidate']);

// Backoffice
Route::get('/backoffice', [Backoffice::class, 'index']);
Route::get('/titre', [TitreController::class, 'index']);
Route::get('/boService', [ServiceController::class, 'backoffice']);
Route::get('/boTestimonial', [TestimonialController::class, 'index']);
Route::get('/boAbout', [AboutController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/boContact', [ContactController::class, 'backoffice']);
Route::get('/boBlog', [BlogController::class, 'backoffice']);
Route::get('/boNewsletter', [NewsletterController::class, 'index']);
Route::get('/boComment', [CommentController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');