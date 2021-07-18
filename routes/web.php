<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
    return view('backend.home');
});

Route::get('/dashboard',[UserController::class, 'index']);


Route::get('/content',function () {
    return view('backend.content.list');
});
// Route::get('/category',function () {
//     return view('backend.category.list');
// });
Route::get('/user',function () {
    return view('backend.user.list');
});


#CATEGORY
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category/post', [CategoryController::class, 'save']);
Route::post('/category/post/{id}', [CategoryController::class, 'save']);
Route::post('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/category/delete', [UserController::class, 'index']);