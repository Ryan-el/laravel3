<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Friends;

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





Route::get('/', [App\Http\Controllers\Cobacontroller::class, 'friends']);
Route::get('/friends', [App\Http\Controllers\Cobacontroller::class, 'friends']);
Route::get('/friends/create', [App\Http\Controllers\Cobacontroller::class, 'create']);
Route::post('/friends', [App\Http\Controllers\Cobacontroller::class, 'store']);
