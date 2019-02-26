<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;
use App\CommunityMember;
use App\Http\Requests\CreateCommunityRequest;
use JWTAuth;
use Illuminate\Http\Response;
use Log;

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

    $posts = $community->posts;
    return Response::create([
      'message' => 'Get community post successfully.',
      'posts' => $posts
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }
}