<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('register', RegisterController::class);

Route::resource('blog',BlogController::class);
Route::get('/login', [AuthController::class, 'loginPage'])->name('login'); 
Route::post('/login', [AuthController::class, 'login'])->name('login.submit'); 