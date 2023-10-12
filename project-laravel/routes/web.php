<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

route::get('/', [HomeController::class, 'home'])->name('home');
route::get('/signup', [AuthController::class, 'signup'])->name('signup');
route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/table', function () {
    return view('table');
})->name('table');
Route::get('/data-tables', function () {
    return view('dataTables');
})->name('data-tables');

