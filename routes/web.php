<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', [AboutController::class, 'index']);

Route::get('/blog-post', [BlogPostController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/portfolio', [PortofolioController::class, 'index']);
