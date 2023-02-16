<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Products;

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

// Product class
Route::get('/list', [Products::class, 'productList']);
Route::get('/add', [Products::class, 'addProduct']);
Route::get('/update', [Products::class, 'updateProduct']);
Route::get('/delete', [Products::class, 'deleteProduct']);

// 미들웨어 관련
Route::view('home', 'home');
//Route::view('users', 'users');
Route::view('noaccess', 'noaccess');

Route::group(['middleware' => ['protectedPage']], function () {
  Route::view('users', 'users');
});