<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\User;
use Hash;
use JWTAuth;
use Illuminate\Http\Response;

class LoginController extends Controller
{
  public function login(LoginRequest $request) {
    $user = User::where('email', $request->email)->first();

    if (!empty($user)) {
      if (!Hash::check($request->password, $user->password)) {
        return Response::create([
          'message' => 'Invalid credential!',
          'errors' => [
            'auth' => [
              'Invalid credential!'
            ]
          ]
        ], 401, [
          'Content-Type' => 'application/json',
        ]);
      }
    } else {
      return Response::create([
        'message' => 'Invalid credential!',
        'errors' => [
          'auth' => [
            'Invalid credential!'
          ]
        ]
      ], 401, [
        'Content-Type' => 'application/json',
      ]);
    }

    return Response::create([
      'message' => 'Successfully authenticated!'
    ], 200, [
      'Content-Type' => 'application/json',
      'Authorization' => 'Bearer '.JWTAuth::fromUser($user)
    ]);
  }
}
