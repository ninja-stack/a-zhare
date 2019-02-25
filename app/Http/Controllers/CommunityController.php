<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;
use App\CommunityMember;
use App\Http\Requests\CreateCommunityRequest;
use JWTAuth;
use Illuminate\Http\Response;

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
}