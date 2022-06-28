<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TwitterLoginController;
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
//Auth::Routes();

Route::get('/', ArticleController::class)->name('article.index');

Route::get('auth/login/twitter', [TwitterLoginController::class, 'redirectToProvider']);
Route::get('auth/twitter/callback',[TwitterLoginController::class, 'handleProviderCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
