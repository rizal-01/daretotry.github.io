<?php

use App\Http\Controllers\MenuController;
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

Route::get('/', [MenuController::class, 'index']);
Route::get('/class-gbr', [MenuController::class, 'gbr']);
Route::get('/class-jpn', [MenuController::class, 'jpn']);
Route::get('/class-kor', [MenuController::class, 'kor']);

Route::get('/mini', [MenuController::class, 'course']);
Route::get('/about', [MenuController::class, 'about']);
Route::get('/contact', [MenuController::class, 'contact']);
Route::get('/faq', [MenuController::class, 'faq']);
