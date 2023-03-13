<?php

use Illuminate\Support\Facades\Route;

// use controller admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminRoleController;

// use controller view
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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

// view frontend
Route::get('/',[HomeController::class, 'index'])->name('view.home');
Route::get('/collection/all',[CategoryController::class, 'index'])->name('view.collection');
Route::get('/cart/add/{pro_id}/{cus_id}',[CartController::class, 'add'])->name('view.cart.add');

// login admin
Route::get('/admin',[AdminLoginController::class,'index'])->name('login');
Route::post('/admin',[AdminLoginController::class,'store'])->name('login.store');

// view admin
Route::name('admin.')->prefix('/admin')->middleware(['auth'])->group(function(){

  Route::get('/home',[AdminController::class,'index'])->name('home');
  Route::get('/home/user/edit/check',[AdminUserController::class,'checkPass'])->name('check.pass');
  Route::resource('/home/category', AdminCategoryController::class);
  Route::resource('/home/product', AdminProductController::class);
  Route::resource('/home/blog', AdminBlogController::class);
  Route::resource('/home/user', AdminUserController::class);
  Route::resource('/home/role', AdminRoleController::class);
});
