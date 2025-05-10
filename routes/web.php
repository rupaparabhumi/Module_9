<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/add-students',[HomeController::class,'students']);
Route::post('/add-students',[HomeController::class,'store']);
Route::get('/read-data/{id}',[HomeController::class,'read']);
Route::get('/edit-data/{id}',[HomeController::class,'edit']);
Route::post('/edit-data/{id}',[HomeController::class,'update']);
Route::get('/{id}',[HomeController::class,'destroy']);
Route::get('/',[HomeController::class,'show']);