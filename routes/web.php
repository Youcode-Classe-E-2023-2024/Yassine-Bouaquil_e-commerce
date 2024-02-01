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

Route::get('/Product',[ProductController::class,'liste_product']);
Route::get('/ajouter',[ProductController::class,'ajouter_product']);
Route::post('/ajouter/traitement',[ProductController::class,'ajouter_product_traitement']);



