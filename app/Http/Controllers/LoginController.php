<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Response;

class LoginController extends Controller
{
  public function login(LoginRequest $request) {



    return Response::create([
      'success' => true
    ], 200, [
      'Content-Type' => 'application/json'
    ]);
  }
}
