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

Route::get('/', function () {
    return view('dash/add');
});

Route::get('/overview', function() {
    return view('dash/overview');
});
Route::get('/difabel/list' , [\App\Http\Controllers\DifabelController::class , 'list'])->name('listbarang');
Route::get('/difabel/add' , [\App\Http\Controllers\DifabelController::class , 'addlist'])->name('add.listbarang');

