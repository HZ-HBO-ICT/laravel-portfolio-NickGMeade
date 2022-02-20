<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

// Routing for the FAQ page
// (Keeping the long form routing here for reference)
//Route::get('/faq', [FaqController::class, 'index']);
//Route::post('/faq', [FaqController::class, 'store']);
//Route::get('/faq/create', [FaqController::class, 'create']);
//Route::get('/faq/{faq}/edit', [FaqController::class, 'edit']);
//Route::put('/faq/{faq}', [FaqController::class, 'update']);
//Route::delete('/faq/{faq}', [FaqController::class, 'destroy']);
Route::resource('/faq', FaqController::class)->only([
    'index', 'store', 'create', 'edit', 'update'. 'destroy'
]);

// Routing for the Blog pages
// (Keeping the long form routing here for reference)
//Route::get('/blog', [BlogController::class, 'index']);
//Route::post('/blog', [BlogController::class, 'store']);
//Route::get('/blog/create', [BlogController::class, 'create']);
//Route::get('/blogs/{article}', [BlogController::class, 'show']);
//Route::get('/blogs/{article}/edit', [BlogController::class, 'edit']);
//Route::put('/blogs/{article}', [BlogController::class, 'update']);
//Route::delete('/blogs/{article}', [BlogController::class, 'destroy']);
Route::resource('/blog', BlogController::class)->only([
    'index', 'store', 'create'
]);

Route::resource('/blogs', BlogController::class)->only([
    'show', 'edit', 'update', 'destroy'
]);;



