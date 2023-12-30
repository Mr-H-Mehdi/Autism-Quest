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
//save created story 
Route::post('/userStories/create',[userStoryController::class,'store']);
//show create story form
Route::get('/userStories/create',[userStoryController::class,'create']);
//show register
Route::get('/register',[userController::class,'create']);
//show user stories
Route::get('/userStories',[userStoryController::class,'index']);
//show resources
Route::get('/resources',[resourceController::class,'index']);
//create user
Route::post('/users',[userController::class,'store']);
//show user specific stories
Route::get('/userStories/{id}',[userStoryController::class,'show']);
//log out user
Route::post('/logout',[userController::class,'logout']);
//show login
Route::get('/login',[userController::class,'login']);
//login
Route::post('/users/login',[userController::class,'authenticate']);
//update story
Route::put('/userStories/update/{id}', [userStoryController::class, 'update']);
//show edit Story form
Route::get('/userStories/edit/{id}', [userStoryController::class, 'edit'])->name('edit');
//Delete story
Route::delete('/userStories/{id}',[userStoryController::class,'delete']);
//display awareness page
Route::get('/awareness', function () {
    return view('awareness.index');
});
Route::get('/arena', function () {
    return view('games.arena');
});