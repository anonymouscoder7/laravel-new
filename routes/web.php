<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[FrontendController::class,'index']);
Route::get('/students',[StudentController::class,'create']);
Route::post('/store-student',[StudentController::class,'store']);
Route::get('/delete-student/{id}',[StudentController::class,'destroy']);
Route::get('/edit-student/{id}',[StudentController::class,'edit']);
Route::post('/update-student',[StudentController::class,'update']);

Route::get('/products',[ProductController::class,'index']);
Route::get('/create-product',[ProductController::class,'create']);
Route::post('/store-product',[ProductController::class,'store']);
Route::get('/delete-product/{id}',[ProductController::class,'destroy']);
Route::get('/edit-product/{id}',[ProductController::class,'edit']);
Route::post('/update-product',[ProductController::class,'update']);

Route::get('/about/{id}',[FrontendController::class,'about']);
Route::get('/contact',[FrontendController::class,'contact']);










