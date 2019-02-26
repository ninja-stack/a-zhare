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

Route::post('/login', 'LoginController@login');
Route::post('/register', 'SignUpController@register');

Route::post('/create-community', 'CommunityController@createCommunity');
Route::get('/get_user_communities', 'CommunityController@getUserCommunityList');
Route::get('/community/{slug}', 'CommunityController@getCommunityPostList');