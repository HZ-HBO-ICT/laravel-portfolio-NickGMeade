<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GradeController;

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
// Route::get('/dashboard', [DashboardController::class, 'show']);

// Routing for the FAQ page
Route::resource('/faq', FaqController::class)->except(['show']);

// Routing for the Blog pages
Route::resource('/articles', ArticleController::class);

// Routing for the Grades
Route::resource('/grade', GradeController::class);
