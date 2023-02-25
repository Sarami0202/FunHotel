<?php

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

//投票数
Route::get('/vote/{id?}', 'App\Http\Controllers\VoteController@index');
Route::post('/vote', 'App\Http\Controllers\VoteController@store');
Route::post('/check', 'App\Http\Controllers\VoteController@check');
//エリア選択
Route::get('/area/{area?}', 'App\Http\Controllers\AreaController@index');
//部門選択
Route::get('/category/{category?}', 'App\Http\Controllers\CategoryController@index');
//こだわり武門選択
Route::get('/stick/{stick?}', 'App\Http\Controllers\StickController@index');
//宿ホテル情報
Route::get('/hotel/{name?}', 'App\Http\Controllers\HotelController@index');
Route::post('/hotel', 'App\Http\Controllers\HotelController@store');
Route::post('/hotel/{id}', 'App\Http\Controllers\HotelController@update');
Route::delete('/hotel/{id}', 'App\Http\Controllers\HotelController@destroy');
//メールアドレス情報
Route::get('/email', 'App\Http\Controllers\EmailController@index');
Route::post('/email', 'App\Http\Controllers\EmailController@store');
//IPアドレス
Route::get('/ip', 'App\Http\Controllers\IpController@index');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
