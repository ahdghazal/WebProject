<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\OrderController;
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


Route::get('/', [UserController::class, 'showHomePage']);
Route::post('/', [UserController::class, 'homepage']);

Route::get('/signup', [UserController::class, 'showSignupPage']);
Route::post('/signup', [UserController::class, 'signup']);

Route::get('/login', [UserController::class, 'showLoginPage']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/addToCart', [OrderController::class, 'addToCart']);

Route::get('/menu', [OrderController::class, 'showMenuPage']);

Route::get('/order', [OrderController::class, 'showOrderPage']);

Route::get('/submitinfo', [OrderController::class, 'showSubmitInfo']);


Route::get('/cart', [OrderController::class, 'showCartPage']);

