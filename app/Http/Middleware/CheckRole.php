<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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

        
        $userRoles = Auth::user()->roles->pluck('name');
        

        if($userRoles->contains($role)){
             return $next($request);
        }

        return redirect()->back();
    }
}
