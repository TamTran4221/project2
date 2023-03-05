<?php

<<<<<<< HEAD
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Faker\Guesser\Name;
=======
>>>>>>> 2ea2d36946036c4e651120a3ba52ad6c14266420
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

<<<<<<< HEAD
Route::get('/',function(){
  return view('layout.home', ['title'=> "Trang chủ"]);
});
Route::get('/home',[LayoutController::class,'home'])->name('home');
Route::get('/about',[LayoutController::class,'about'])->name('layout.about');
Route::get('/news',[LayoutController::class,'news'])->name('layout.news');
Route::get('/contact',[LayoutController::class,'contact'])->name('layout.contact');
Route::get('/sofa',[LayoutController::class,'product'])->name('layout.product');
Route::get('/table',[LayoutController::class,'table'])->name('layout.table');
Route::get('/tivi',[LayoutController::class,'tivi'])->name('layout.tivi');
Route::get('/detail',[LayoutController::class,'detail'])->name('layout.detail');

Route::get('/admin',[LoginController::class,'index'])->name('login');
Route::post('/admin',[LoginController::class,'store'])->name('login.store');

 Route::middleware(['auth'])->group(function(){
 
  Route::get('/admin/home',[AdminController::class,'index'])->name('admin.home');
  Route::resource('admin/home/category', CategoryController::class);
  Route::resource('admin/home/product', ProductController::class);
  Route::resource('admin/home/blog', BlogController::class);
});
=======
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
  Route::resource('/home/category', AdminCategoryController::class);
  Route::resource('/home/product', AdminProductController::class);
  Route::resource('/home/blog', AdminBlogController::class);
  Route::resource('/home/user', AdminUserController::class);
  Route::resource('/home/role', AdminRoleController::class);
});
>>>>>>> 2ea2d36946036c4e651120a3ba52ad6c14266420
