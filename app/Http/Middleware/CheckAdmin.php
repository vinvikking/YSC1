<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use Role;

class CheckAdmin
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
        

        $userRoles = Auth::user()->roles->pluck('name');

        if($userRoles->contains('Admin')){
             return $next($request);
        }
        toastr()->error("Als u denkt dat dit een fout is neem dan contact met de systeembeheerder op");
        return redirect('/home');
    }
}
