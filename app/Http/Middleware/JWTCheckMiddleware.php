<?php

namespace App\Http\Middleware;

use Closure;

class JWTCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $token = JWTAuth::getToken();

      try {
        JWTAuth::getPayload($token);
        return $next($request);
      } catch (\Exception $e) {
        return Response::create([
          'message' => 'Token invalid!'
        ], 401, [
          'Content-Type' => 'application/json'
        ]);
      }
    }
}
