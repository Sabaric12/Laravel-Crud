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

Route::get('/', function () {
    return view('welcome');
});

Route::get('add',[\App\Http\Controllers\AdminController::class,'add']);
Route::get('/add-post',[\App\Http\Controllers\AdminController::class,'addPost'])->name('post.add');
Route::post('/add-post',[\App\Http\Controllers\AdminController::class,'savePost'])->name('save.post');
Route::get('/post-list',[\App\Http\Controllers\AdminController::class,'postList'])->name('post.list');
Route::get('/edit-post/{id}',[\App\Http\Controllers\AdminController::class,'editPost'])->name('edit.post');
Route::get('/delete-post/{id}',[\App\Http\Controllers\AdminController::class,'deletePost'])->name('delete.post');
Route::get('/view-post/{id}',[\App\Http\Controllers\AdminController::class,'viewPost'])->name('view.post');
Route::post('/update-post',[\App\Http\Controllers\AdminController::class,'updatePost'])->name('update.post');
