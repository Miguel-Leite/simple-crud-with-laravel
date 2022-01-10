<?php

use App\Http\Controllers\ProductsController;
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
    return view('welcome');
});


Route::get('/products',[ProductsController::class,'index'])
    ->name('products.index');

Route::get('/products/create',[ProductsController::class,'create'])
->name('products.create');

Route::post('/products/create',[ProductsController::class,'store'])
->name('products.store');

Route::get('/products/edit/{id?}', [ProductsController::class,'edit'])
->name('products.edit')
->where(['id' => '[0-9]+']);

Route::put('/products/update/{id?}', [ProductsController::class,'update'])
->name('products.update')
->where(['id' => '[0-9]+']);

Route::get('/products/destroy/{id?}', [ProductsController::class,'destroy'])
->name('products.destroy')
->where(['id' => '[0-9]+']);
// Route::resource('products', ProductController::class);