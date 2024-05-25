<?php

use App\Http\Controllers\FixtureController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ContentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/managers', ManagerController::class);
Route::resource('/fixtures', FixtureController::class);
Route::resource('/games', GameController::class);
Route::resource('/photo-gallery', PhotoGalleryController::class);
Route::resource('/content', ContentController::class);
