<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($request->user() !=null){
            if(!$request->user()->hasRole($role)){
                return redirect()->route('index');
            }
            else{
                return $next($request);
            }
        }
        else {
            return $next($request);
        }
    }
}
