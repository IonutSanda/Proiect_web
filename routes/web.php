<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/products-admin', [App\Http\Controllers\ProductsController::class, 'indexAdmin'])->name('products.list');
        Route::get('/products-admin/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('products.create');
        Route::post('/products-admin/create', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');
        Route::get('/products-admin/show/{id}', [App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');
        Route::get('/products-admin/edit/{id}', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products.edit');
        Route::patch('/products-admin/edit/{id}', [App\Http\Controllers\ProductsController::class, 'updateAdmin'])->name('products.update');
        Route::delete('/products-admin/delete/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('products.destroy');
    });
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('tasks', App\Http\Controllers\TaskController::class);

    Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']); //afisare pagina de start
    Route::get('cart', [App\Http\Controllers\ProductsController::class, 'cart']); //cos
    Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductsController::class, 'addToCart']);//adaug incos
    Route::patch('update-cart', [App\Http\Controllers\ProductsController::class, 'update']); //modific cos
    Route::delete('remove-from-cart', [App\Http\Controllers\ProductsController::class, 'remove']);//sterg dincos

});
