<?php

namespace App\Http\Middleware;

use Closure;

class IsUser
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
      if(auth()->check() && auth()->user()->is_admin == 0){
          return $next($request);
      }else{
          abort(403, "You're not user");
      }
    }
}
