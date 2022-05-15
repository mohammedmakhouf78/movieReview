<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\AuthController as FrontAuthController;
use App\Http\Controllers\Front\EditorController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use App\Http\Controllers\Front\MovieController;
use App\Http\Controllers\Front\ReviewController as FrontReviewController;
use App\Http\Controllers\Front\ViewerController;
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
//fontend

Route::group(['prefix' => '/', 'as' => 'home.'],function(){
    Route::get('/',[FrontHomeController::class,'index'])->name('index');
    Route::get('registerPage',[FrontAuthController::class,'registerPage'])->name('registerPage')->middleware('guest');
    Route::post('register',[FrontAuthController::class,'register'])->name('register')->middleware('guest');
    Route::get('loginPage',[FrontAuthController::class,'loginPage'])->name('loginPage')->middleware('guest');
    Route::post('login',[FrontAuthController::class,'login'])->name('login')->middleware('guest');
    Route::get('logout',[FrontAuthController::class,'logout'])->name('logout')->middleware('auth');

    Route::group(['prefix' => 'editor', 'as' => 'editor.', 'middleware' => 'editor'],function() {
        Route::get('/profile',[EditorController::class,'profile'])->name('profile');
        Route::get('/edit/{user}',[EditorController::class,'edit'])->name('edit');
        Route::post('/update/{user}',[EditorController::class,'update'])->name('update');
        Route::get('/movie/create',[EditorController::class,'movieCreate'])->name('movieCreate');
        Route::post('/movie/store',[EditorController::class,'movieStore'])->name('movieStore');
        Route::get('/movie/edit/{product}',[EditorController::class,'movieEdit'])->name('movieEdit');
        Route::put('/movie/update/{product}',[EditorController::class,'movieUpdate'])->name('movieUpdate');
        Route::delete('/movie/delete/{product}',[EditorController::class,'movieDelete'])->name('movieDelete');
    });

    Route::group(['prefix' => 'viewer', 'as' => 'viewer.', 'middleware' => 'viewer'], function(){
        Route::get('profile',[ViewerController::class , 'profile'])->name('profile');
        Route::get('edit/{user}',[ViewerController::class , 'edit'])->name('edit');
        Route::post('update/{user}',[ViewerController::class , 'update'])->name('update');
    });

    Route::group(['prefix' => 'movies' , 'as' => 'movies.'], function(){
        Route::get('index',[MovieController::class,'index'])->name('index');
        Route::get('show/{product}',[MovieController::class,'show'])->name('show');
    });


    Route::group(['prefix' => 'review' , 'as' => 'review.','middleware' => 'auth'],function(){
        Route::post('create',[FrontReviewController::class,'create'])->name('create');
    });
});

Route::group(['prefix' =>'admin' , 'as'=>'admin.' , 'middleware' => ['admin','auth']],function (){
    Route::get('/',[HomeController::class ,'index'])->name('index');

    Route::resource('category',CategoryController::class);
    Route::resource('user',UserController::class);
    Route::resource('product',ProductController::class);
    Route::resource('review',ReviewController::class);
});

