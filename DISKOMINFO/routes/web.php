<?php

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

//Route CRUD//
Route::get('/', function () {
    return redirect('login');
});


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/add', [\App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::post('/home/post', [\App\Http\Controllers\HomeController::class, 'addpost'])->name('addpost');
Route::get('/home/detail/{id}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/home/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/home/contact', [\App\Http\Controllers\HomeController::class, 'kontak'])->name('contact');


Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return redirect()->route('overview');
    });
    Route::get('/overview', [\App\Http\Controllers\adminController::class, 'overview'])->name('overview');
    Route::get('/edit/{id}', [\App\Http\Controllers\adminController::class, 'edit'])->name('admin.edit');
    Route::post('/update/post', [\App\Http\Controllers\adminController::class, 'editpost'])->name('admin.editpost');
    Route::get('/hapus/{id}', [\App\Http\Controllers\adminController::class, 'hapus'])->name('admin.hapus');
});
