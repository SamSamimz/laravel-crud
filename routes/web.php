<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\usercontroller;
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

//user 
Route::group(['prefix' => 'user'], function() {
    Route::get('/', [usercontroller::class, 'index']);
    Route::get('/login', [logincontroller::class, 'index']);
    Route::get('/add', [usercontroller::class, 'add']);
    Route::post('/add', [usercontroller::class, 'store']);
    Route::get('/delete/{id}', [usercontroller::class, 'delete']);
});
