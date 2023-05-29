<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::get('/movie/edit/{id}', [MovieController::class, 'edit'])->name('movie.edit');
Route::get('/movie/detail/{id}', [MovieController::class, 'show'])->name('movie.detail');
Route::put('/movie/update/{id}', [MovieController::class, 'update'])->name('movie.update');
Route::post('/movie/store', [MovieController::class, 'store'])->name('movie.store');

