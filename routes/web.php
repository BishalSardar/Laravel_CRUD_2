<?php

use App\Http\Controllers\PersonController;
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

Route::get('/home', [PersonController::class, 'index'])->name('home');
Route::post('/home', [PersonController::class, 'store'])->name('home.store');
Route::get('edit/{id}', [PersonController::class, 'edit'])->name('edit');
Route::post('update/{id}', [PersonController::class, 'update'])->name('update');
Route::get('delete/{id}', [PersonController::class, 'delete'])->name('delete');
