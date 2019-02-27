<?php

namespace App\Http\Controllers;

use App\Community;
use App\Http\Requests\CreateContentPostRequest;
use App\Http\Requests\CreateRequestPostRequest;
use Illuminate\Http\Response;
use JWTAuth;

class PostController extends Controller
{
  public function createContentPost(CreateContentPostRequest $request) {
    $communities = Community::whereIn('slug', $request->community_slugs)->get();
    $token = JWTAuth::getToken();
    $user = JWTAuth::toUser($token);

    $post = $user->posts()->create([
      'content' => $request->get('content'),
      'type' => 'CONTENT'
    ]);

    foreach ($communities as $community) {
      $community->posts()->attach($post);
    }

    return Response::create([
      'message' => 'Success!'
    ], 200, [
      'Content-Type' => 'application/json'
    ]);
  }

  public function createRequestPost(CreateRequestPostRequest $request) {
    $communities = Community::whereIn('slug', $request->community_slugs)->get();
    $token = JWTAuth::getToken();
    $user = JWTAuth::toUser($token);

    $post = $user->posts()->create([
      'title' => $request->get('title'),
      'content' => $request->get('content'),
      'type' => 'REQUEST',
      'rewards' => $request->get('rewards')
    ]);

    foreach ($communities as $community) {
      $community->posts()->attach($post);
    }

    return Response::create([
      'message' => 'Success!'
    ], 200, [
      'Content-Type' => 'application/json'
    ]);
  }
}
