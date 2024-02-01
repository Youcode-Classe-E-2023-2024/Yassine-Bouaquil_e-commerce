<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class,'liste_product'])->name('list');
Route::get('/ajouter',[ProductController::class,'ajouter_product']);
Route::post('/ajouter/traitement',[ProductController::class,'ajouter_product_traitement']);
Route::get('/update-product/{product}' ,[ProductController::class,'update_product']);
Route::get('/delete-product/{product}' ,[ProductController::class,'delete_product']);
Route::put('/update/traitement/{product}',[ProductController::class,'update_product_traitement'])->name('product.update');
Route::put('/delete/traitement/{product}',[ProductController::class,'delete_product_traitement'])->name('product.update');


Route::get('/product/{id}' ,[ProductController::class,'show']);
