<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

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
    return view('frontend.layouts.home');
});

Route::get('/dashboard',[UserController::class, 'index']);
Route::get('/content',function () {
    return view('backend.content.list');
});

#LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    #DASHBOARD
    Route::get('dashboard', [AuthController::class, 'index'])->name('dashboard');

    #CONTENT
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user/post', [UserController::class, 'save']);
    Route::post('/user/post/{id}', [UserController::class, 'save']);
    Route::post('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/delete/{id}', [UserController::class, 'delete']);

    #CATEGORY
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category/post', [CategoryController::class, 'save']);
    Route::post('/category/post/{id}', [CategoryController::class, 'save']);
    Route::post('/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/category/delete/{id}', [CategoryController::class, 'delete']);

    #LOGOUT
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

#CATATAN
// ->name('login') merupakan penamaan routing