<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Requests;

class CheckLogin
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
        $user = $request->session()->get('user');
        if(!$user){
            return redirect('/login');
        }
        
        return $next($request);
    }
}
