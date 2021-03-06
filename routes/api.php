<?php

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

Route::get('/test', function (){
  return response()->json(['success' => true]);
})->middleware('refresh');

Route::post('/login', 'LoginController@login');
Route::post('/register', 'SignUpController@register');

Route::get('/community/list/joined','CommunityController@getUserCommunityList');
Route::get('/community/{slug}/posts','CommunityController@getCommunityPostList');
Route::post('/create-community', 'CommunityController@createCommunity');
Route::post('/create-content-post', 'PostController@createContentPost');
Route::post('/create-request-post', 'PostController@createRequestPost');
Route::get('/community/search', 'CommunityController@searchCommunity');
Route::get('/community/join', 'CommunityController@joinCommunity');
Route::get('/post/all', 'CommunityController@getAllPosts');
Route::get('/post/profile', 'CommunityController@getProfilePosts');
Route::get('/post/{id}', 'PostController@getPost');

Route::get('/applicants','RequestApplicantsController@getRequestApplicants');
Route::get('/send_applicant_email', 'RequestApplicantsController@sendApplicantMail');

Route::get('/community/{slug}','CommunityController@getCommunityInfo');
