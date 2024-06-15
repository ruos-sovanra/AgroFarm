<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UIController;
use App\Http\Controllers\ShopController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin',[CategoryController::class,'index'])->name('category.index');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/admin/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::delete('/admin/category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

Route::get('/admin/product',[ProductController::class,'index'])->name('product.index');
Route::get('/admin/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/admin/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/admin/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/admin/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('/admin/product/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');

Route::get('/',[UIController::class,'index'])->name('ui.index');
Route::get('/shop',[UIController::class,'shop'])->name('ui.shop');
Route::get('/about',[UIController::class,'about'])->name('ui.about');