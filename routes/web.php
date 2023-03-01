<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
    return view('layout.new');
});

Route::get('/admin',[LoginController::class,'index'])->name('login');
Route::post('/admin',[LoginController::class,'store'])->name('login.store');

 Route::middleware(['auth'])->group(function(){
 
  Route::get('/admin/home',[AdminController::class,'index'])->name('admin.home');
  Route::resource('admin/home/category', CategoryController::class);
  Route::resource('admin/home/product', ProductController::class);
  Route::resource('admin/home/blog', BlogController::class);
});