<?php

use App\Http\Controllers\FrontendBaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UsersController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[FrontendBaseController::class,'index'])->name('index');
Route::get('product',[FrontendBaseController::class,'product'])->name('product');
Route::get('blog/{id?}',[FrontendBaseController::class,'blog'])->name('blogs');
Route::get('setting',[FrontendBaseController::class,'setting'])->name('setting');
Route::get('contact',[FrontendBaseController::class,'contact'])->name('contact');
Route::get('blogs-index',[FrontendBaseController::class,'blogs'])->name('blog.all');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin-home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('category.create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category.store',[CategoryController::class, 'store'])->name('category.store');
Route::get('category.index',[CategoryController::class, 'index'])->name('category.index');
Route::get('category/{id}/show',[CategoryController::class, 'show'])->name('category.show');
Route::get('category/{id}/edit',[CategoryController::class, 'edit'])->name('category.edit');
Route::put('category/{id}/update',[CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{id}/delete',[CategoryController::class, 'destroy'])->name('category.deletes');


//Product

Route::get('product.create', [ProductController::class, 'create'])->name('product.create');
Route::post('product.store',[ProductController::class,'store'])->name('product.store');
Route::get('product.index',[ProductController::class,'index'])->name('product.index');
Route::get('product/{id}/show',[ProductController::class, 'show'])->name('product.show');
Route::get('product/{id}/edit',[ProductController::class, 'edit'])->name('product.edit');
Route::put('product/{id}/update',[ProductController::class, 'update'])->name('product.update');
Route::delete('product/{id}/delete',[ProductController::class, 'destroy'])->name('product.delete');



//Setting
Route::get('setting-create', [SettingController::class, 'create'])->name('setting.create');
Route::post('setting-store',[SettingController::class,'store'])->name('setting.store');
Route::get('setting-index',[SettingController::class,'index'])->name('setting.index');
Route::get('setting-{id}/show',[SettingController::class,'show'])->name('setting.show');
Route::get('setting-{id}/edit',[SettingController::class,'edit'])->name('setting.edit');
Route::put('setting-{id}/update',[SettingController::class,'update'])->name('setting.update');
Route::delete('setting-{id}/delete',[SettingController::class,'destroy'])->name('setting.destroy');

//client
Route::get('client-create',[ClientController::class,'create'])->name('client.create');
Route::post('client-store',[ClientController::class,'store'])->name('client.store');
Route::get('client-index',[ClientController::class,'index'])->name('client.index');
Route::get('client-view-{id}',[ClientController::class,'show'])->name('client.show');
Route::get('client-edit-{id}',[ClientController::class,'edit'])->name('client.edit');
Route::put('client-update-{id}',[ClientController::class,'update'])->name('client.update');
Route::delete('client-delete-{id}',[ClientController::class,'destroy'])->name('client.destroy');

//blog
Route::get('blog-create',[BlogController::class,'create'])->name('blog.create');
Route::post('blog-store',[BlogController::class,'store'])->name('blog.store');
Route::get('blog-index',[BlogController::class,'index'])->name('blog.index');
Route::get('blog-view-{id}',[BlogController::class,'show'])->name('blog.show');
Route::get('blog-edit-{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::put('blog-update-{id}',[BlogController::class,'update'])->name('blog.update');
Route::delete('blog-delete-{id}',[BlogController::class,'destroy'])->name('blog.destroy');

//page
Route::get('page-create',[PageController::class,'create'])->name('page.create');
Route::post('page-store',[PageController::class,'store'])->name('page.store');
Route::get('page-index',[PageController::class,'index'])->name('page.index');
Route::get('page-view-{id}',[PageController::class,'show'])->name('page.show');
Route::get('page-edit-{id}',[PageController::class,'edit'])->name('page.edit');
Route::put('page-update-{id}',[PageController::class,'update'])->name('page.update');
Route::delete('page-delete-{id}',[PageController::class,'destroy'])->name('page.destroy');


//user
Route::get('user-index',[UsersController::class,'index'])->name('users.index');
Route::get('user-view-{id}',[UsersController::class,'show'])->name('users.show');
Route::get('user-edit-{id}',[UsersController::class,'edit'])->name('users.edit');
Route::put('user-update-{id}',[UsersController::class,'update'])->name('users.update');
Route::delete('user-delete-{id}',[UsersController::class,'destroy'])->name('users.destroy');






