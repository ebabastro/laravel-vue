<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ruta para obtener las categories
Route::get('/getCategories',[CategoryController::class, 'index'])->name('getCategories');
// Ruta para obtener las subcategories
Route::get('/getSubcategories',[CategoryController::class, 'index'])->name('subSubcategories');
// Ruta para obtener los products
Route::get('/getProducts',[CategoryController::class, 'index'])->name('getProducts');
// Ruta para obtener los almacenes
Route::get('/getStores',[CategoryController::class, 'index'])->name('getStores');

