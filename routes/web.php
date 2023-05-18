<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class,'home'])->name('home');
Route::get('posts', [PageController::class,'posts'])->name('posts');
Route::get('services', [PageController::class,'services'])->name('services');
Route::get('service/{slug}', [PageController::class,'service'])->name('service');
Route::get('post/{slug}', [PageController::class,'post'])->name('post');
Route::post('contact', [ContactController::class,'store'])->name('contact.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});