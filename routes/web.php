<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
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
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('page/{slug}', [PageController::class, 'page'])->name('page');

Route::get('posts', [PageController::class, 'posts'])->name('posts');
Route::get('posts/{slug}', [PageController::class, 'post'])->name('post');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('service/{slug}', [PageController::class, 'service'])->name('service');
Route::get('about-us', [PageController::class, 'about'])->name('about');
Route::get('pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('faq', [PageController::class, 'faq'])->name('faq');
Route::get('snapshop/privacy-policy', [PageController::class, 'snapshopPrivacy'])->name('snapshop.privacy');
Route::get('portfolios', [PageController::class, 'portfolios'])->name('portfolios');
// Route::get('our-team', [PageController::class, 'ourTeam'])->name('our.team');
Route::get('letsBuild', [PageController::class, 'letsBuild'])->name('letsBuild');
Route::get('single_view /{member}', [PageController::class, 'single_view'])->name('single_view');
Route::get('portfolio/{slug}', [PageController::class, 'portfolio'])->name('portfolio');
Route::post('popup', [ProjectController::class, 'popup'])->name('popup.store');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('subscribe', [PageController::class, 'subscribe'])->name('subscribe');
Route::get('sitemap.xml', [PageController::class, 'sitemap']);

Route::resource('projects', ProjectController::class);
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'client', 'as' => 'client.','middleware'=>'auth'], function () {
    Route::get('dashboard', [ClientController::class, 'index'])->name('dashboard');
    Route::get('dashboard-project', [ClientController::class, 'project'])->name('project');
    Route::get('project/create', [ClientController::class, 'create'])->name('create');
    Route::post('project/store', [ClientController::class, 'store'])->name('project.store');
    Route::get('project/edit/{project}', [ClientController::class, 'edit'])->name('project.edit');
    Route::post('project/update/{project}', [ClientController::class, 'update'])->name('project.update');
    Route::get('project/view/{project}',[ClientController::class,'view'])->name('project.view');
    Route::delete('project/{project}', [ClientController::class, 'destroy'])->name('destroy');
    Route::get('dashboard/profile', [ClientController::class, 'profile'])->name('profile');
    Route::post('update/password', [ClientController::class, 'updatePassword'])->name('updatePassword');
    Route::post('avatar/upload', [ClientController::class, 'imageUpload'])->name('imageUpload');

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
