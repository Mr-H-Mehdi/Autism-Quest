<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\userStoryController;

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

Route::get('/', function () {
    return view('welcome');
});

//show register
Route::get('/register',[userController::class,'create']);
//show user stories
Route::get('/userStories',[userStoryController::class,'index']);
//show resources
Route::get('/resources',[resourceController::class,'index']);
//create user
Route::post('/users',[userController::class,'store']);
//show user specific stories
Route::get('/yourStories/{id}',[userStoryController::class,'show']);
//log out user
Route::post('/logout',[userController::class,'logout']);
//show login
Route::get('/login',[userController::class,'login']);
//login
Route::post('/users/login',[userController::class,'authenticate']);
