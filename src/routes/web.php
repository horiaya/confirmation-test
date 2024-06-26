<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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

Route::get('/', [RegisterController::class, 'index']);
Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::get('/admin', [RegisterController::class, 'admin'])->name('admin');
