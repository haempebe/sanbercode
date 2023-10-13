<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
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
    return view('halaman.welcome');
})->name('welcome');
Route::get('/table', function () {
    return view('halaman.table');
})->name('table');
Route::get('/data-tables', function () {
    return view('halaman.dataTables');
})->name('data-tables');

Route::prefix('cast')->name("cast.")->group(function () {
    Route::get("", [CastController::class, 'cast'])->name("cast");
    Route::get("/create", [CastController::class, 'create'])->name("create");
    Route::post("/store", [CastController::class, 'store'])->name("store");
    Route::get("/{id}/show", [CastController::class, 'show'])->name("show");
    Route::get("/{id}/edit", [CastController::class, 'edit'])->name("edit");
    Route::put("/{id}", [CastController::class, 'update'])->name("update");
    Route::delete("/{id}/delete", [CastController::class, 'destroy'])->name("destroy");
});

