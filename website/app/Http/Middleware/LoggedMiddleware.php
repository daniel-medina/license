<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class LoggedMiddleware
{
  public function handle(Request $request, Closure $next)
  {
    if (!isset($_SESSION['nickname'])) {
      return redirect('/chat/login');
    }

    return $next($request);
  }
}
