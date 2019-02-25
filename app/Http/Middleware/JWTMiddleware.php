<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Response;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class JWTMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Closure $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    $response = $next($request);

    $token = JWTAuth::getToken();

    try {
      if ($payload = JWTAuth::getPayload($token)) {
        $exp = $payload->get('exp');
        $expire_time = Carbon::createFromTimestamp($exp);
        $almost_expire_time = $expire_time->subDay(1);
        if (Carbon::now() > $almost_expire_time) {
          $user = JWTAuth::toUser($token);
          $response->headers->set('Authorization', JWTAuth::fromUser($user));
        }
      }
    } catch (\Exception $e) {
      return Response::create([
        'message' => 'Token invalid!'
      ], 401, [
        'Content-Type' => 'application/json'
      ]);
    }
    return $response;
  }
}
