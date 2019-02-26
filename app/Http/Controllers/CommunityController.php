<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommunityRequest;
use Illuminate\Http\Response;
use Log;
use JWTAuth;

use App\Community;

class CommunityController extends Controller
{
  public function createCommunity(CreateCommunityRequest $request) {
    $token = JWTAuth::getToken();
    if($token == null) {
      return Response::create([
        'message' => 'Missing Token!',
        'errors' => [
          'auth' => [
            'Token Missing!'
          ]
        ]
      ], 401, [
        'Content-Type' => 'application/json',
      ]);
    }
    $user = JWTAuth::toUser($token);

    $community = $user->ownedCommunities()->create([
      'slug' => $request->get('slug'),
      'name' => $request->get('name'),
      'description' => $request->get('description')
    ]);

    $member = $community->members()->attach($user, ['is_mod' => true]);

    return Response::create([
      'message' => 'Community created successfully.'
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }

  public function getUserCommunityList(){
    $token = JWTAuth::getToken();
    $user = JWTAuth::toUser($token);
    
    $communities = $user->communities;
    return Response::create([
      'message' => 'Get user community list successfully.',
      'communities' => $communities
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }

  public function getCommunityPostList($slug){
    $community = Community::where('slug', $slug)->first();

    if(!$community) {
      return Response::create([
        'message' => 'No such community',
        'errors' => [
          'community' => [
            'Invalid community'
          ]
        ]
      ], 404, [
        'Content-Type' => 'application/json',
      ]);
    }
    
    $posts = $community->posts;

    return Response::create([
      'message' => 'Get community post successfully.',
      'posts' => $posts
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }
}