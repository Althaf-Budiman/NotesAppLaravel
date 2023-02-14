<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/notes', [NoteController::class, 'index']);

Route::get('/notes/create', [NoteController::class, 'create'])->middleware('is_admin');

Route::get('/notes/{id}', [NoteController::class, 'show']);

Route::post('/notes', [NoteController::class, 'store'])->middleware('is_admin');

Route::get('/notes/{id}/edit', [NoteController::class, 'edit'])->middleware('is_admin');

Route::patch('/notes/{id}', [NoteController::class, 'update'])->middleware('is_admin');

Route::delete('/notes/{id}', [NoteController::class, 'delete'])->middleware('is_admin');
