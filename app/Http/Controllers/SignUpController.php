<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\SignUpRequest;
use App\User;
use Hash;
use JWTAuth;

class SignUpController extends Controller
{
  public function register(SignUpRequest $request) {
    $user = User::create([
      'name' => $request->get('name'),
      'gender' => $request->get('gender'),
      'email' => $request->get('email'),
      'password' => Hash::make($request->get('password'))
    ]);
      
    return Response::create([
      'message' => 'Register success'
    ], 200, [
      'Content-Type' => 'application/json',
      'Authorization' => JWTAuth::fromUser($user)
    ]);
  }
}
    