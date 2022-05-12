<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
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

Route::group(['prefix' =>'admin' , 'as'=>'admin.'],function (){
    Route::get('/',[HomeController::class ,'index'])->name('index');

    Route::resource('category',CategoryController::class);
    Route::resource('user',UserController::class);
    Route::resource('product',ProductController::class);
    Route::resource('review',ReviewController::class);

    Route::group([],function(){
        Route::get('/loginPage',[AuthController::class,'loginPage'])->name('loginPage');
        Route::post('login',[AuthController::class ,'login'])->name('login');
    });

});

