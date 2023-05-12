<?php
namespace App\Http\Controllers;
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

//if the routes are not working modify to Route::get('/','WelcomeController@index');
Route::get('/',[WelcomeController::class,'index']);
Route::get('/about',[WelcomeController::class,'aboutUs']);
Route::get('/all-products',[WelcomeController::class,'products']);

// product routes
//shows all products
Route::get('/products',[ProductController::class,'index'])->name('products.index');
//shows create product form
Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
//saves the created product to the database
Route::post('/products',[ProductController::class, 'store'])->name('products.store');
//shows 1 product
Route::get('/products/{product}',[ProductController::class, 'show'])->name('products.show');
//shows edit product form
Route::get('/products/{product}/edit',[ProductController::class, 'edit'])->name('products.edit');
//commits edited product to the database
Route::put('/products/{product}',[ProductController::class, 'update'])->name('products.update');
//deletes edited product to the database
Route::delete('/products/{product}',[ProductController::class, 'destroy'])->name('products.destroy');

// these 7 routes are equivalent to
//Route::resource('products',ProductController::class);// Note: model injection method works only with resource route.
