<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
Use Alert;

class AuthMiddleware
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
        if (Sentinel::check()) {
   
                return $next($request);
            
                
            }else{

                 Alert::error('Oops!', 'Please Login to View Property Details.');

                return redirect('/');

        }
    }
}
