<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Home page
Route::get('/', [PageController::class, 'home'])->name('home');

// About page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Contact page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');

// Services page (previously Blog)
Route::get('/services', [PageController::class, 'blog'])->name('blog');

// Dynamic Service Details
Route::get('/services/{slug}', [PageController::class, 'serviceShow'])->name('service.show');

// Courses page
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
