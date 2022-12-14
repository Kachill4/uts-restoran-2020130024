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

// Route::get('/', function () {
//     return view('home');
// });
use App\Http\Controllers\HomeController;
Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');

use App\Http\Controllers\ProductController;
Route::get('/product', ProductController::class)->name('product');

use App\Http\Controllers\AboutController;
Route::get('/about', [App\Http\Controllers\AboutController::class,'index'])->name('about');

use App\Http\Controllers\TestimoniController;
Route::get('/testimoni', [App\Http\Controllers\TestimoniController::class,'index'])->name('testimoni');
