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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\TodoController::class, 'index'])->name('home');

Route::prefix('/todo')->group(function(){
    Route::post('/store', [App\Http\Controllers\TodoController::class, 'store'])->name('todo.store');
    Route::get('/{task_id}/delete', [App\Http\Controllers\TodoController::class, 'delete'])->name('todo.delete');
    Route::get('/{task_id}/update', [App\Http\Controllers\TodoController::class, 'update'])->name('todo.update');

});

Route::prefix('/blog')->group(function(){
    Route::get('/', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
    Route::post('/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
});

Route::prefix('/item')->group(function(){
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index'])->name('item');;
    Route::post('/store', [App\Http\Controllers\ItemController::class, 'store'])->name('item.store');
});


    Route::get('/itemview', [App\Http\Controllers\ItemController::class, 'viewitem'])->name('item.view');
    Route::get('/edit{item_id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('item.edit');

    Route::prefix('/update')->group(function(){
        Route::get('/{item_id}/delete', [App\Http\Controllers\ItemController::class, 'delete'])->name('item.delete');
        Route::put('/{item_id}/update', [App\Http\Controllers\ItemController::class, 'update'])->name('item.update');
    });

    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
    Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');

