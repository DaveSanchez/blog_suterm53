<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Permissions;
use App\User;
use App\Messages;


class GetMessages
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
        if(Auth::check() && Auth::user()->admin){

            $unseen = Messages::where('seen','=',0)->count();

            $messages = Messages::orderBy('created_at','desc')->take(3)->get();
            

            $request->session()->flash('last3messages',$messages);                          
            $request->session()->flash('unseen',$unseen);                          

            return $next($request);

        }else {
            return $next($request);            
        }
    }
}
