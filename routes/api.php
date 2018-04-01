<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login_app','Android_controller@login_app');

Route::post('/store_mail','Android_controller@store_mail');

Route::post('/read_mail','Android_controller@read_mail');

Route::post('/register_app','Android_controller@register_app');
