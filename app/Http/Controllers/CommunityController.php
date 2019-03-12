<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommunityRequest;
use Illuminate\Http\Response;
use Log;
use JWTAuth;
use App\Community;
use App\Post;

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

    $community->members()->attach($user, ['is_mod' => true]);

    return Response::create([
      'message' => 'Community created successfully.'
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }

  public function getCommunityInfo($slug){
    $community = Community::where('slug', $slug)->first();

    return Response::create([
      'message' => 'Community created successfully.',
      'community' => $community
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }

  public function getUserCommunityList() {
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

  public function searchCommunity(Request $request) {
    $query = $request->get('q');
    $communities = Community::orWhere('name', 'LIKE', '%'. $query .'%')
                              ->orWhere('description', 'LIKE', '%'. $query .'%')
                              ->with('owner')
                              ->get();

    return Response::create([
      'message' => 'Found ' . count($communities) . ' communities',
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
    
    $posts = $community->posts()->with('poster')->get();

    return Response::create([
      'message' => 'Get community post successfully.',
      'posts' => $posts
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }
  
  public function joinCommunity(Request $request) {
    $id = $request->get('community_id');
    $token = JWTAuth::getToken();

    $community = Community::find($id);
    $user = JWTAuth::toUser($token);
    $community->members()->attach($user);

    return Response::create([
      'message' => 'Joined ' . $community->name
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }

  public function getAllPosts() {
    $token = JWTAuth::getToken();
    $user = JWTAuth::toUser($token);
    $posts = [];

    $communities_posts = $user->communities()->with('posts')->get();

    foreach($communities_posts as $community_posts) {
      foreach($community_posts->posts as $post) {
        $lol = $post->toArray();
        $lel = $community_posts->toArray();
        $lel['posts'] = null;
        $lol['community'] = $lel;
        array_push($posts, $lol);
      }
    }

    return Response::create([
      'message' => 'Get all community post successfully.',
      'posts' => $posts
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }

  public function getProfilePosts() {
    $token = JWTAuth::getToken();
    $user = JWTAuth::toUser($token);
    $posts = Post::where('poster_id', $user->id)->get();

    return Response::create([
      'message' => 'Get all community post successfully.',
      'posts' => $posts
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }
}
