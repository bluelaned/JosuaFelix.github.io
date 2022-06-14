<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;

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

Route::get('/admin/index', function () {
    return view('index');
});

// Route::group(['Middleware' => 'Administrator'], function(){
Route::group(['prefix' => '/admin/','middleware' => 'administrator'], function(){
 
    // -----------------------------------------------------------------------
    Route::get('komik', [App\Http\Controllers\KomikController::class, 'index']);
    Route::get('majalah', [App\Http\Controllers\MajalahController::class, 'index']);
    Route::get('ensiklopedia', [App\Http\Controllers\EnsiklopediaController::class, 'index']);
    // -----------------------------------------------------------------------
    Route::resource('novel', NovelController::class);
    Route::get('/edit-novel/{id}', [NovelController::Class, 'edit'])->name('edit-novel');
    Route::post('/update-novel/{id}', [NovelController::Class, 'update'])->name('update-novel');
    Route::get('/delete-novel/{id}', [App\Http\Controllers\NovelController::class, 'deletenovel']);
    // -----------------------------------------------------------------------
    Route::resource('guru', GuruController::class);
    Route::get('/edit-guru/{id}', [GuruController::Class, 'edit'])->name('edit-guru');
    Route::post('/update-guru/{id}', [GuruController::Class, 'update'])->name('update-guru');
    Route::get('/delete-guru/{id}', [App\Http\Controllers\GuruController::class, 'deleteguru']);
});

Route::get('/user/guru',[UserController::class, 'indexguru']);
Route::get('/user/novel',[UserController::class, 'indexnovel']);