<?php

namespace App\Http\Middleware;

use App\Http\Helpers\TokenHelper;
use Closure;
use Illuminate\Http\Request;

class TokenAuthentication
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->header("Token") || $request->header("Token") == "" || !TokenHelper::validateToken($request->header("Token"))) {
            return response()->json(['error' => '!!!Invalid Token or Token has Expired!!! Provide the valid token (or Generate new Token)'], 401);
        }
        return $next($request);
    }
}