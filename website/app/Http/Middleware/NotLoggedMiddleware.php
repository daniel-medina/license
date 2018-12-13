<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class NotLoggedMiddleware
{
  public function handle(Request $request, Closure $next)
  {
    if (isset($_SESSION['nickname'])) {
      return redirect('/chat');
    }

    return $next($request);
  }
}
