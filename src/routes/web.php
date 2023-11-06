<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/buildings', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::delete('/buildings/{building}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');
Route::get('/buildings/{building}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::put('/buildings/{building}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::get('/get-builder-details', [App\Http\Controllers\HomeController::class, 'getBuilderDetails']);



