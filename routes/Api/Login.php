<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControlls\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get("/users",[LoginController::class,'get_all_users']);
Route::get("/users/{id}",[LoginController::class,'get_single_users']);

Route::post("/login",[LoginController::class,'user_login']);
