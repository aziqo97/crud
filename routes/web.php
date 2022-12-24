<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;


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



Auth::routes();

Route::get('/', [PostController::class, 'all'])->name('all')->middleware('auth');

Auth::routes();


Route::get('post/create', [PostController::class, 'create'])->middleware('auth');
Route::get('post', [PostController::class, 'all'])->middleware('auth');
Route::post('post/create', [PostController::class, 'store'])->middleware('auth');
Route::get('post/{post}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::get('post/{post}', [PostController::class, 'show'])->middleware('auth');
Route::get('post/delete/{post}', [PostController::class, 'destroy'])->middleware('auth');
