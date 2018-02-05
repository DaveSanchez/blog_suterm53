<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class DenyToStandard
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

       
        if(Auth::check() && !Auth::user()->admin){
            abort(404);
        }else {
            return $next($request);            
        }
    }
}
