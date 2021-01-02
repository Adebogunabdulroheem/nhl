<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/blog', [PagesController::class, 'blog']);

Route::get('/nhsl', [PagesController::class, 'nhsl']);

Route::get('/nesl', [PagesController::class, 'nesl']);

Route::get('/nmsl', [PagesController::class, 'nmsl']);

Route::get('/ncfsl', [PagesController::class, 'ncfsl']);

Route::get('/nnmcsl', [PagesController::class, 'nnmcsl']);

Route::get('/nsl', [PagesController::class, 'nsl']);

Route::resource('posts', 'PostsController');

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function () {
	Route::get('/dashboard', [DashboardController::class, 'index']);
	Route::get('/dashboard', 'DashboardController@users')->name('users');
});

