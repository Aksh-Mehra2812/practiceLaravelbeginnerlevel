<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[UserController::class,'index'])->name('home');
Route::get('add',[UserController::class,'add'])->name('add');
Route::group(['prefix'=>'user'],function(){
    Route::get('login',[UserController::class,'userLogin'])->name('login');
    Route::get('register',[UserController::class,'userRegister'])->name('register');
    // Route::post('signin',[UserController::class,'userSignin'])->name('signin');
    // Route::post('signup',[UserController::class,'userSignup'])->name('signup');
});



