<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AjaxMiddleware
{
  public function handle(Request $request, Closure $next)
  {
    // Allows only ajax requests
    if (!$request->ajax()) {
      return response('Forbidden.', 403);
    }

    return $next($request);
  }
}
